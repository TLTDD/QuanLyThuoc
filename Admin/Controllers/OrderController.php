<?php
require_once("./Models/order.php");
class OrderController
{
    var $order_model;
    public function __construct()
    {
        $this->order_model = new Order();
    }

    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 1) {
                $id = 0;
            }
            $data = $this->order_model->trangthaiDH($id);
        } else {
            $data = $this->order_model->trangThaiDonHang();
        }
        require_once("./Views/indexAD.php");
    }
    function xetduyet()
    {
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThaiDH' => 1,
        );
        $this->order_model->update($data);
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->order_model->delete($_GET['id']);
        }
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->order_model->chitietdonhang($id);
        require_once("./Views/indexAD.php");
    }
}
