<?php

namespace App\Controller;
class ServiceController
{
    function presentation2(): void
    {
        $content ='Benvenuto nella pagina service';
        require 'App/View/home.php';
    }
}