<?php
require_once("model.php");
class newsModel extends Model
{
    function getTinTuc($a,$b){
        $query = "SELECT * from tintuc limit $a,$b";
        require("result.php");
        return $data;
    }
    function getChiTietTin($id){
        $query = "SELECT * from tintuc where idTinTuc = $id";
        require("result.php");
        return $data;
    }
}