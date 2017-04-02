<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 14:22
 */
class Doctors extends DataBase
{
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

    public function getDoctorsShort(){
        $query = "SELECT name_of_doctor, link_foto_doctor, expirience_of_work,specialty_of_doctor, science_degree, short_descr  FROM doctors";
        $result = $this->db->query($query);
        if($result){
            $doc_cat = array();
            while($new_item = $result->fetch_assoc()){
                $doc_cat[] = $new_item;
            }
            return $doc_cat;
        }
        return FALSE;
    }






}