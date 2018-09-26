<?php
namespace Sasedev\Twig\Extensions\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * PhpExtension
 *
 * @author sasedev <sinus@sasedev.net>
 *        
 */
class PhpExtension extends AbstractExtension
{

    public function getFunctions()
    {
        $fonctions = array();
        $fonctions['CallPhpFunc_*'] = new TwigFunction('CallPhpFunc_*', array(
            $this,
            'phpToTwig'
        ), array(
            'pre_escape' => 'html',
            'is_safe' => array(
                'html'
            )
        ));

        return $fonctions;
    }

    public function phpToTwig()
    {
        $arg_list = \func_get_args();
        $function = \array_shift($arg_list);

        return \call_user_func_array($function, $arg_list);
    }
}

