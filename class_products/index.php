<?php 

require_once "Product.php";
require_once "IConn.php";
require_once "Conn.php";

$db = new Conn("mysql:host=localhost;dbname=avancando-oo","root","");

$aparelho = new Product($db);

$list = $aparelho->list();

var_dump($list);
