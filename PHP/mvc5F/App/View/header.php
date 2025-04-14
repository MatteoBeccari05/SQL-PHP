<?php
$appConfig= require dirname(__DIR__, 2) . '/appConfig.php';
$baseUrl = $appConfig['baseURL'].$appConfig['prjName'];
$href=$appConfig['baseURL'].$appConfig['prjName'].$appConfig['css'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=$href?>">
    <title><?=$title?></title>
</head>
<body>
<div class="topnav">
    <a href="<?=$baseUrl?>home/index">Home</a>
    <a href="<?=$baseUrl?>home/products">Products</a>
    <a href="<?=$baseUrl?>home/services">Services</a>
    <a href="<?=$baseUrl?>home/about">About</a>
</div>


