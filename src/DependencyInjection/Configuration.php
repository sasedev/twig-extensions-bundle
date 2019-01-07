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
        $treeBuilder = new TreeBuilder('sasedev_twig_extensions');
        /**
         * @see https://github.com/symfony/monolog-bundle/pull/281/commits/45742f1a97291edd1401ecb58024488bbd793038
         */
        //$rootNode = method_exists(TreeBuilder::class, 'getRootNode') ? $treeBuilder->getRootNode() : $treeBuilder->root('sasedev_twig_extensions');

        return $treeBuilder;
    }
}

