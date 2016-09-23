<?php 

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['conn'] = function()
{
    return new \Source\Conn("mysql:host=localhost;dbname=avancando-oo","root","");
};

$container['product'] = function($c)
{
    return new Source\Product($c['conn']);
};

$list = $container['product']->listar();

var_dump($list);