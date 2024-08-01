<?php

namespace WpRestSchema\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\Client;

#[AsCommand(name: 'generate', description: 'Generate the schema for the WordPress REST API')]
class GenerateCommand extends Command
{
    protected function configure(): void
    {
        $this->addArgument('site-url', InputArgument::REQUIRED, 'The URL of the WordPress site to generate the schema for');
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Generating schema...');

        $siteUrl = $input->getArgument('site-url');

        $output->writeln('Site URL: ' . $siteUrl);

        // use guzzle to fetch the site wp-json schema
        $client = new Client();
        $response = $client->get($siteUrl . '/wp-json', [
            'verify' => false
        ]);

        $routeSchema = json_decode($response->getBody(), true);
        foreach (array_keys($routeSchema['routes']) as $originalRoute) {
            $route = preg_replace('/\(([^()]*(?:\([^()]*\)[^()]*)*)\)/', '1', $originalRoute);
            $response = $client->options($siteUrl . '/wp-json' . $route, [
                'verify' => false
            ]);

            $routeOptions = json_decode($response->getBody(), true);
            if (empty($routeOptions)) {
                continue;
            }

            $path = preg_replace('/\(([^()]*(?:\([^()]*\)[^()]*)*)\)/', 'value', $originalRoute);
            $path = $path === '/' ? '/index' : $path;
            $content = json_encode($routeOptions, JSON_PRETTY_PRINT);

            $file = GENERATOR_ROOT . '/schemas/json' . $path . '.json';
            $this->createFile($file, $content);

            $file = GENERATOR_ROOT . '/schemas/php' . $this->getCamelPath($path) . '.php';
            $this->createFile($file, $this->getClassContent($path, $content));
        }

        return Command::SUCCESS;
    }

    private function createFile(string $file, string $content)
    {
        if (!file_exists(dirname($file))) {
            mkdir(dirname($file), 0777, true);
        }

        file_put_contents($file, $content);
    }

    private function getClassContent(string $path, string $content): string
    {
        $content = implode("\n", array_map(function ($line) {
            return '        ' . $line;
        }, explode("\n", $content)));
        $camelPath = $this->getCamelPath($path);
        $phpContent = '<?php' . PHP_EOL;
        $phpContent .= PHP_EOL;
        $phpContent .= 'namespace WpRestSchema\Schemas' . trim(str_replace('/', '\\', dirname($camelPath)), '\\') . ';' . PHP_EOL;
        $phpContent .= PHP_EOL;
        $phpContent .= 'class ' . basename($camelPath) . PHP_EOL;
        $phpContent .= '{' . PHP_EOL;
        $phpContent .= '    public static function getSchema()' . PHP_EOL;
        $phpContent .= '    {' . PHP_EOL;
        $phpContent .= '        return <<<\'JSON\'' . PHP_EOL;
        $phpContent .= $content . PHP_EOL;
        $phpContent .= '        JSON;' . PHP_EOL;
        $phpContent .= '    }' . PHP_EOL;
        $phpContent .= '}' . PHP_EOL;

        return $phpContent;
    }

    private function getCamelPath(string $path): string
    {
        $camelPath = str_replace('/', '/', ucwords($path, '/'));
        $camelPath = str_replace('-', '', ucwords($camelPath, '-'));
        $camelPath = str_replace('_', '', ucwords($camelPath, '_'));
        return $camelPath;
    }
}