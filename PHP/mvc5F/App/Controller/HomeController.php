<?php

namespace App\Controller;
class HomeController
{
    function presentation1(): void
    {
        $content = 'Benvenuto nella home page';
        require 'App/View/home.php';
    }

}