<?php
namespace Sasedev\Twig\Extensions;

use Sasedev\Twig\Extensions\DependencyInjection\SasedevTwigExtensionsRegisterExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * SasedevTwigExtensionsBundle
 * 
 * @author sasedev <sinus@sasedev.net>
 *
 */
class SasedevTwigExtensionsBundle extends Bundle
{
    /**
     * 
     * {@inheritDoc}
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getContainerExtension()
     */
    public function getContainerExtension()
    {
        return new SasedevTwigExtensionsRegisterExtension();
    }
}

