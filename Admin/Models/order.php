<?php
require_once("model.php");
class Order extends Model
{
    var $table = "hoadon";
    var $contens = "MaHD";
    function trangthaiDH($id){
        $query = "select * from HoaDon where TrangThai = 1 and TrangThaiDH = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function chitietdonhang($id){
        $query = "select ct.*, s.TenSP as Ten from chitiethoadon as ct, sanpham as s where ct.MaSP = s.MaSP and ct.MaHD = $id ";

        require("result.php");
        
        return $data;
    }
}