<?php

include_once 'Config/config.php';

$foo = new Directions($db);
$res = $foo->getDirections();
$request = new ActionGET($db);
//var_dump($res);

include_once "header.php";

$page = $request->getMain();
include_once $page;


include_once "footer.php";
