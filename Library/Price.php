<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 22:21
 */
class Price extends DataBase
{

    public function getPriceMain(){
        $query = "SELECT specialty, price_first_time, price_after FROM specialty_price WHERE consulting_at_home IS NULL";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }
            return $catalogs;
        }
        return false;

    }

    public function getPriceMainWithHome(){
        $query = "SELECT specialty, consulting_at_home FROM specialty_price WHERE consulting_at_home IS NOT NULL";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }
            return $catalogs;
        }
        return false;
    }

}