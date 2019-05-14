<?php


namespace Logipro\Bundle\ExampleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('logipro_example');

        $treeBuilder->getRootNode()
            ->children()
                ->node('username_provider', 'scalar')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
