<?php 

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=avancando-oo","root","");

$aparelho = new Product($db);

$list = $aparelho->list();

var_dump($list);
