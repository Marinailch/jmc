<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 25.03.2017
 * Time: 23:51
 */
function __autoload($class){
    $filename="Library/{$class}.php";
    if(file_exists($filename)){
        include_once $filename;
    }
}



$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'jmcdatabase',
);