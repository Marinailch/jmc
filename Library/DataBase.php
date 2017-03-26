<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 25.03.2017
 * Time: 23:49
 */


class DataBase
{
    protected $db;

    public function __construct($db)
    {
        $this->db = new mysqli(
            $db['host'],
            $db['user'],
            $db['pass'],
            $db['name']
        );

    }
    public function hiho(){
        $query = "SELECT * FROM doctors";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }

            return $catalogs;

        }else{
            return false;
        }
    }


}
