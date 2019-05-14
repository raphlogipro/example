<?php

namespace Logipro\Bundle\ExampleBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class LogiproExampleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        /**
         * @TODO for real bundle, create an user service for use username provider
         * $definition = $container->getDefinition('logipro_example.user.service');
         * $definition->replaceArgument(0, $config['username_provider']);
         */
    }
}
