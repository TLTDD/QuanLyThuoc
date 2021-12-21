<?php
    require_once("model.php");
    class ordermyModel extends Model
    {
        function showHoaDon($maND) {
            $query = "SELECT * FROM hoadon where maND = $maND";
            require("result.php");
            return $data;
        }

        function deleteHoaDon($maHD) {
            $query = "DELETE FROM hoadon WHERE hoadon.MaHD = $maHD";
            return $this->conn->query($query);
        }

        function orderDetail($maHD) {
            $query = "SELECT * FROM hoadon WHERE MaHD = $maHD";
            require("result.php");
            return $data;
        }

        function orderDetail_product($maHD) {
            $query = "select s.MaSP,ct.SoLuong,ct.DonGia, s.TenSP, hinhanh from chitiethoadon as ct, sanpham as s, hinhanh where ct.MaSP = s.MaSP and s.MaSP = hinhanh.masp and ct.MaHD = $maHD GROUP by s.MaSP";
            require("result.php");
            return $data;
        }

        function getImage($masp) {
            $query = "SELECT hinhanh FROM hinhanh";
            require("result.php");
            return $data;
        }
    }
?>