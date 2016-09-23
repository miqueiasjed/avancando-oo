<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=avancando-oo";
$container['user'] = "root";
$container['pass'] = "";