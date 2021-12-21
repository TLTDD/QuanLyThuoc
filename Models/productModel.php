<?php 
    require_once("model.php");
    class productModel extends model{
        function sanpham_danhmuc($a,$b,$danhmuc)
        {  
            $query ="SELECT * from sanpham , loaisanpham, danhmuc, hinhanh,khuyenmai
             WHERE sanpham.trangThai = 1 
             		and loaisanpham.MaDM = danhmuc.MaDM 
                    and khuyenmai.MaKM = sanpham.MaKM 
             		and sanpham.MaLSP = loaisanpham.MaLSP 
             		and loaisanpham.MaDM = '$danhmuc' 
                    AND sanpham.MaSP = hinhanh.masp
                    GROUP by sanpham.MaSP
         		    ORDER BY ThoiGian DESC limit $a,$b";
            require("result.php");
            return $data;  
        }
        function sanpham_khuyenmai() {
            $query = "SELECT * FROM khuyenmai, sanpham,hinhanh WHERE khuyenmai.MaKM = sanpham.MaKM and khuyenmai.GiaTriKM != 0 AND sanpham.MaSP = hinhanh.masp
            GROUP by sanpham.MaSP";
            // echo $query;
            require("result.php");
            return $data;
        }
        public function sanpham($masp)
        {
            $query ="SELECT * from sanpham,hinhanh where sanpham.MaSP = hinhanh.masp and sanpham.MaSP = '$masp'";
            require("result.php");
            return $data;
        }
        public function sanpham_km($masp)
        {
            $query ="SELECT * from sanpham,hinhanh,khuyenmai where sanpham.MaSP = hinhanh.masp and khuyenmai.MaKM = sanpham.MaKM and sanpham.MaSP = '$masp'";
            require("result.php");
            return $data;
        }
        public function loaisp_danhmuc($danhmuc)
        {
            $query ="SELECT * from danhmuc, loaisanpham
                     where danhmuc.MaDM = loaisanpham.MaDM";
            require("result.php");
            return $data; 
        }
        function searchData($key) {
            $query = "SELECT * FROM sanpham, hinhanh WHERE sanpham.MaSP = hinhanh.masp and TenSP LIKE '$key%' GROUP by sanpham.MaSP";
            require("result.php");
            return $data;
        }
        function getBanner() {
            $query = "SELECT * FROM banner";
            require("result.php");
            return $data;
        }
    }
?>