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

    public function getGET(){

        $res = $this->directions->getDirections();

        $id = filter_input(INPUT_GET, 'id');
        foreach ($res as $key=>$value){
            if ($id == $value['name_of_direction']){
                $id = $res[$key];
                return $id;
            }
        }
        return FALSE;

    }

    public function getMain(){

        $id = filter_input(INPUT_GET, 'page');

        if(!$id){
            return 'pages/main.php';
        }
        return FALSE;

    }


}