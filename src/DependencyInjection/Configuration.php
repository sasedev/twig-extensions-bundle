<?php
namespace Sasedev\Twig\Extensions\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @author sasedev <sinus@sasedev.net>
 *        
 */
class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        //$rootNode = $treeBuilder->root('sasedev_twig_extensions');
        $treeBuilder->root('sasedev_twig_extensions');

        return $treeBuilder;
    }
}

