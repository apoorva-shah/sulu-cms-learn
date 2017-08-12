<?php

namespace One\Twig;

use Symfony\Component\VarDumper\VarDumper;

class DebugExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('dd', [$this, 'dd']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function dd($val)
    {
        VarDumper::dump($val);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'goobing_debug_extension';
    }
}
