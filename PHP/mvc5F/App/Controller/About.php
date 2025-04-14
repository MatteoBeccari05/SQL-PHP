<?php

namespace App\Controller;
class About
{
    function about(): void
    {
        $content = 'Benvenuto nella pagina about';
        require 'App/View/about.php';
    }
}