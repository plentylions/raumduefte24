<?php

namespace raumduefte24\Containers;

use Plenty\Plugin\Templates\Twig;

class raumduefte24Container
{
    public function call(Twig $twig):string
    {
        return $twig->render('raumduefte24::Stylesheet');
    }
}