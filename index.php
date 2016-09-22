<?php 

$db = new \PDO("mysql:host=localhost;dbname=avancando-oo","root","");

$query = "select * from products";

$stmt = $db->prepare($query);
$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);
