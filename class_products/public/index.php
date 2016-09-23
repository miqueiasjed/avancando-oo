<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";


$list = $container['ServiceProduct']->listar();

require_once "ListProduct.php";