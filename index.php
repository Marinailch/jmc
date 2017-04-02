<?php

include_once 'Config/config.php';


$doctors = new Doctors($db);
$request = new ActionGET($db);
$directions = new Directions($db);


$res = $directions->getDirections();


//var_dump($res);

include_once "header.php";

$page = $request->getMain();
include_once $page;


include_once "footer.php";
