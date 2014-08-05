<?php

require_once 'vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

$container = new ContainerBuilder();
$diConfigLocation = new FileLocator(__DIR__ . '/app/dependency_injection/');
$loader = new PhpFileLoader($container, $diConfigLocation);
$loader->load('config.php');
$container->compile();

$generatorService = $container->get('generator');
$converterService = $container->get('converter');

$randString = $generatorService->generateRandomString();

echo $randString . ' ';
echo $converterService->convert($randString);
