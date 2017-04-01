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
    public function getDirections(){
        $query = "SELECT id, name_of_direction, link_foto_direction, description_direction FROM directions";
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

    public function getDoctorsByDirection($id){
        $query = "SELECT name_of_doctor, link_foto_doctor, expirience_of_work, specialty_of_doctor, science_degree, short_descr, full_descr FROM doctors, directions WHERE direction_id=directions.id and direction_id = '$id'";
        $result = $this->db->query($query);
        if($result){
            $catalog = array();
            while($new_item = $result->fetch_assoc()){
                $catalog[] = $new_item;
            }
            return $catalog;
        }
        return FALSE;
    }


}


