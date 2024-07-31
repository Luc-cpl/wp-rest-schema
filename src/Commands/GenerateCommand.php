<?php

namespace WpRestSchema\Generator\Commands;

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

            $path = preg_replace('/\(([^()]*(?:\([^()]*\)[^()]*)*)\)/', '_value', $originalRoute);
            $file = GENERATOR_ROOT . '/schemas/json' . $path . '.json';
            if (!file_exists(dirname($file))) {
                mkdir(dirname($file), 0777, true);
            }

            file_put_contents($file, json_encode($routeOptions, JSON_PRETTY_PRINT));
        }

        return Command::SUCCESS;
    }
}