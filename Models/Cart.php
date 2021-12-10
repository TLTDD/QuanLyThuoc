<?php
require_once("model.php");
class Cart extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from sanpham, hinhanh where sanpham.MaSP = $id and sanpham.masp = hinhanh.masp GROUP by sanpham.MaSP";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}