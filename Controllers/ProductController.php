<?php
require_once("./Models/productModel.php");

    class ProductController {
        var $product_model;
        public function __construct()
        {
             $this->product_model = new productModel();
            
        }
        function list()

        {   
            $data_danhmuc = $this->product_model->danhmuc();
            if(isset($_GET['sp']))
            {
                $data_sanpham  = $this->product_model->sanpham($_GET['sp']);
            }
            
            if(isset($_GET['keyword'])) {
                $key = $_GET['keyword'];
                $data = $this->product_model->searchData($key);
            }

            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
