<?php
require_once("Models/PayModel.php");
require_once("Models/login.php");
class PayController
{
    var $pay_model;
    var $login_model;
    var $diachi;
    public function __construct()
    {
        $this->pay_model = new PayModel();
    }
    function list_cart()
    {
        $data_danhmuc = $this->pay_model->danhmuc();
        $data_address = $this->pay_model->getAddressDefault($_SESSION['login2']['MaND']);
        $data = $this->pay_model->getProvince();
        require_once('Views/indexview.php');
    }
    function showAddress() {
        
    }
    function save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['productMe'])) {
            foreach ($_SESSION['productMe'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        if(isset($_POST['submit'])) {
            // $diachi =  $_POST['diachi'];
            if(isset($_POST['city']) && $_POST['district'] && $_POST['wards'] && $_POST['village']) {
                $city = $this->pay_model->getCity($_POST['city'], 'province');
                $district = $this->pay_model->getCity($_POST['district'],'district');
                $wards = $this->pay_model->getCity($_POST['wards'], 'ward');
                $village = $this->pay_model->getCity($_POST['village'], 'village');
                // print_r($city[0]['name']);
                $diachi = $city[0]['name'] .' - '. $district[0]['name'] .' - '. $wards[0]['name'] .' - '. $village[0]['name'];
                $_SESSION['login2']['DiaChi'] = $diachi;
            }else {
                $diachi = $_POST['address-default'];
                $_SESSION['login2']['DiaChi'] = $diachi;
            }
            $ghichu = $_POST['ghichu'];
        }
        $data = array(
            'MaND' => $_SESSION['login2']['MaND'],
            'NgayLap' => $ThoiGian,
            'NguoiNhan' => $_SESSION['login2']['Ho'].' '. $_SESSION['login2']['Ten'],
            'SDT' => $_SESSION['login2']['SDT'],
            'DiaChi' => $diachi,
            'ghiChu' => $ghichu,
            'TongTien' => ($count + 40000),
            'TrangThai'  =>  '0',
        );
        $this->pay_model->save($data);
    }
    function order_complete()
    {
        $data_danhmuc = $this->pay_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->pay_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['productMe'])) {
            foreach ($_SESSION['productMe'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/indexview.php');
    }
}