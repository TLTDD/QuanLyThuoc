<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_danhmuc = $this->cart_model->danhmuc();

        // $data_danhmuc = $this->cart_model->danhmuc();


        // $data_chitietDM = array();

        // for ($i = 1; $i <= count($data_danhmuc); $i++) {
        //     $data_chitietDM[$i] = $this->cart_model->chitietdanhmuc($i);
        // }

        $count = 0;
        if (isset($_SESSION['productMe'])) {
            foreach ($_SESSION['productMe'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/indexview.php');
    }
    function add_cart($sl)
    {
        $id = $_GET['id'];
        echo $id;
        $data = $this->cart_model->detail_sp($id);
        print_r($data);
        $count = 0;
        if (isset($_SESSION['productMe'][$id])) {
            $arr = $_SESSION['productMe'][$id];
            $arr['soluong'] = $arr['soluong'] + $sl;
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['productMe'][$id] = $arr;
            echo $sl;
            
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['soluong'] = $sl;
            $arr['ThanhTien'] = $data['DonGia']*$arr['soluong'];
            $arr['hinhanh'] = $data['hinhanh'];
            $_SESSION['productMe'][$id] = $arr;
        }

        foreach ($_SESSION['productMe'] as $value) {
            $count += $value['ThanhTien'];
        }
        // if(isset($_POST['km'])) {
        //     $km = '&km=' .$_POST['km'];
        // }else {
        //     $km = '';
        // }
        // echo $_POST['km']
        $path = 'Location:?act=detail&sp=' .$id;
        echo $path;
        header($path);
    }
    function update_cart()
    {   $id = $_GET['id'];
        echo $id;
        $arr = $_SESSION['productMe'][$_GET['id']];
        $arr['TenSP'] = $arr['TenSP'];
        $arr['soluong'] = $arr['soluong'] + 1;
        $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
        $_SESSION['productMe'][$_GET['id']] = $arr;
        $path = 'Location:?act=cart';
        header($path);
    }

    function delete_cart_item()
    {
        $arr = $_SESSION['productMe'][$_GET['id']];
        if ($arr['soluong'] == 1) {
            unset($_SESSION['productMe'][$_GET['id']]);
        } else {
            $arr = $_SESSION['productMe'][$_GET['id']];
            $arr['soluong'] = $arr['soluong'] - 1;
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['productMe'][$_GET['id']] = $arr;
        }
        $path = 'Location:?act=cart';
        header($path);
    }

    function delete_cart() {
        unset($_SESSION['productMe'][$_GET['id']]);
        $path = 'Location:?act=cart';
        header($path);
    }


}
