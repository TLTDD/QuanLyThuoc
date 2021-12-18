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
    }
?>