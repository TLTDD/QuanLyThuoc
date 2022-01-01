<?php
require_once("./Models/productModel.php");
    class homeController {
       
        var $product_model;
        public function __construct()
        {
             $this->product_model = new productModel();  
        }
        function list()
        {  
            $data_danhmuc = $this->product_model->danhmuc();
            $data_loaisp = array();
            $data_loaisp = $this->product_model->loaisp_danhmuc();
            if(isset($_GET['cate']))
            {   if(isset($_GET['loai'])) {
                    $category = $_GET['loai'];
                    $data_tenLSP = $this->product_model->getTenLoaiSP($category);
                    $data_sanpham = $this->product_model->getChiTietSanPham($category);
                }else {
                    $category = $_GET['cate'];
                    $data_sanpham = $this->product_model->sanpham_danhmuc(0,100,$category);
                }
            }
            $data_sanpham1 = $this->product_model->sanpham_danhmuc(0,10,6);
            $data_khuyenmai = $this->product_model->sanpham_khuyenmai();
            $data_sanpham2 = $this->product_model->sanpham_danhmuc(0,10,7);
            $data_topsp = $this->product_model->getSanPhamBanChay();
            $data_arr_topsp = array();
            for ($i = 0; $i < count($data_topsp); $i++) {
                $data_item_sp = $this->product_model->sanpham_km($data_topsp[$i]['MaSP']);
                array_push($data_arr_topsp, $data_item_sp);
            }
            // print_r($data_arr_topsp);

            $data_limit1 = $this->product_model->limit(0,4);
            $data_limit2 = $this->product_model->limit(4,4);
            $data_limit3 = $this->product_model->limit(8,4);
            $data_limit4 = $this->product_model->limit(12,4);

            $data_banner = $this->product_model->getBanner();
            $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
            
            require_once('./Views/indexview.php');  
            
        }

    }
       
      
    
?>
