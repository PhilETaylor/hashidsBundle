<?php

namespace cayetanosoriano\HashidsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('cayetanosoriano_hashids');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('salt')->defaultNull()->end()
                ->scalarNode('min_hash_length')->defaultValue(0)->end()
                ->scalarNode('alphabet')->defaultValue('')->end()
                ;
        return $treeBuilder;
    }
}
