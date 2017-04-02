<?php

include_once 'Config/config.php';

$foo = new Directions($db);
$res = $foo->getDirections();
//var_dump($res);

include_once "header.php";
include_once 'main.php';
include_once "footer.php";
