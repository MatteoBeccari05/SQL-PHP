<?php

namespace App\Controller;
class ProductController
{
    function show1(): void
    {
        $content= 'Benvenuto nella pagina prodotto';
        require 'App/View/home.php';
    }

}