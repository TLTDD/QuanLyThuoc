<?php
require_once("model.php");
class PayModel extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from sanpham, hinhanh where sanpham.MaSP = $id and sanpham.masp = hinhanh.masp GROUP by sanpham.MaSP";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    function getProvince() {
        $query = "SELECT * FROM province";
        require("result.php");
        return $data;
    }

    // function getDistrict($key) {
    //     $query = "SELECT *from district where provinceid = '$key'";
    //     require("result.php");
    //     return $data;
    // }
}