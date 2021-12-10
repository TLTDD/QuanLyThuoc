<?php
require_once("model.php");

class loaisanpham extends Model
{
    
    var $table = "loaisanpham";
    var $contens = "MaLSP";
    function danhmuc(){
        $query = "select * from danhmuc ";
        require("result.php");
        return $data;
    }

    public function getTypeById($idcate)
	{
        $query = "select * from loaisanpham where madm = $idcate";
        require("result.php");
        return $data;
	}
}
?>