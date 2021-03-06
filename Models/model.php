<?php
    require_once("connection.php");
    class model{
        var $conn;
        function __construct()
        {
            $conn_obj = new connection();
            $this->conn = $conn_obj->conn;
        }

        function limit($a, $b)
        {
            $query =  "SELECT * from sanpham,hinhanh WHERE TrangThai = 1 and sanpham.MaSP = hinhanh.masp 
            GROUP by sanpham.MaSP
            ORDER BY ThoiGian DESC limit $a,$b ";
    
            require("result.php");
    
            return $data;
        }
        function random($id)
        {
            $query = "SELECT * FROM SanPham,hinhanh  WHERE TrangThai = 1  and sanpham.MaSP = hinhanh.masp ORDER BY RAND () LIMIT $id";
            require("result.php");
            
            return $data;
        }
        function danhmuc()
        {
            $query = "SELECT * from DanhMuc";
    
            require("result.php");
            
            return $data;
        }
        function chitietdanhmuc($id)
            {
                $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

                require("result.php");
                
                return $data;
            }
     public function loaisp_danhmuc()
        {
            $query ="SELECT * from loaisanpham";
            require("result.php");
            return $data; 
        }
        function getHoaDon(){
            $query ="select * from hoadon ORDER BY NgayLap DESC LIMIT 1";
            require("result.php");
            return $data;
        }
    }
?>