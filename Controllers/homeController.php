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

            $data_limit1 = $this->product_model->limit(0,4);
            $data_limit2 = $this->product_model->limit(4,4);
            $data_limit3 = $this->product_model->limit(8,4);
            $data_limit4 = $this->product_model->limit(12,4);

            $data_banner = $this->product_model->getBanner();
            $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
            $data_random = $this->product_model->random(2);
            do{
                $data_random1 = $this->product_model->random(1);
                $data_random2= $this->product_model->random(1);
                $data_random3 = $this->product_model->random(1);
                $data_random4 = $this->product_model->random(1);
                $data_random5 = $this->product_model->random(1);
            }while($data_random1 == $data_random2 || $data_random1 == $data_random3 || $data_random1 == $data_random4 || $data_random1 == $data_random5 ||$data_random2 == $data_random3 || $data_random2 == $data_random4 || $data_random2 == $data_random5 || $data_random3 == $data_random4 || $data_random3 == $data_random5 || $data_random4 == $data_random5);
            require_once('./Views/indexview.php');  
            
        }

    }
       
      
    
?>
