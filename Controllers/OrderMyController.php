
<?php
require_once("Models/ordermyModel.php");
class OrderMyController
{
    var $order_model;
    public function __construct()
    {
        $this->order_model = new ordermyModel();
    }
    function list_order()
    {
        $data_danhmuc = $this->order_model->danhmuc();
        $data_loaisp = $this->order_model->loaisp_danhmuc();
        $MaND = $_SESSION['login2']['MaND'];
        $data_hoadon = $this->order_model->showHoaDon($MaND);
        require_once('Views/indexview.php');
    }
    function deteteHoaDon(){
       $MaHD = $_GET['maHD'];
       echo$MaHD;
       $this->order_model->deleteHoaDon($MaHD);
       $path = 'Location:?act=orderMy';
       header($path);
     }  

    function orderDetail() {
        $data_danhmuc = $this->order_model->danhmuc();
        $data_loaisp = $this->order_model->loaisp_danhmuc();
        $MaHD = $_GET['maHD'];
        $data_detail_order = $this->order_model->orderDetail($MaHD);
        $data_detail_order_product = $this->order_model->orderDetail_product($MaHD);
        require_once('Views/indexview.php');
    }
}