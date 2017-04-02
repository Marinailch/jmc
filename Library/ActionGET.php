<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 19:03
 */
class ActionGET extends DataBase
{

    protected $directions;
    protected $doctors;
    protected $functional_diagn;
    protected $lab_meth;

    public function __construct($db){
        parent::__construct($db);
        $this->directions = new Directions($db);
        $this->doctors = new Doctors($db);
    }
    /**
     * Проверяем просто наличие или отсутствие GET запроса
     */
    public function getReqByGet(){
        $id = filter_input(INPUT_GET, 'id');
        if(!$id){
            return FALSE;
        }
        return TRUE;
    }

    /**
     * @return bool|mixed
     * Проверяем GET запрос на странице направлений
     * Возвращаем массив с нажатым направлением
     */
     public function getGET(){

        $res = $this->directions->getDirections();

        $id = filter_input(INPUT_GET, 'id');
        foreach ($res as $key=>$value){
            if ($id == $value['name_of_direction']){
                $id = $res[$key];
                return $id;
            }
        }
        $id = $this->directions->getMainPage();
        return $id;


    }
    /**
     * @return bool|mixed
     * Проверяем GET запрос на главной странице
     * Возвращаем подгружаемый файл
     */
    public function getMain(){

        $id = filter_input(INPUT_GET, 'page');

        if(!$id){
            return 'main.php';
        }else if($id=='directions'){
            return 'pages/directions.php';
        }else if($id=='diagnostics'){
            return 'pages/diagnostics.php';
        }
        return FALSE;

    }















}




















