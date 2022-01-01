<?php
require_once("./Models/newsModel.php");
    class newsController {
       
        var $news_model;
        public function __construct()
        {
             $this->news_model = new newsModel();  
        }
        function list()
        {  
            $data_danhmuc = $this->news_model->danhmuc();
            $data_loaisp = $this->news_model->loaisp_danhmuc();
            
            $data_tinTucNoiBat = $this->news_model->getTinTuc(0,4);
            $data_tintuc = $this->news_model->getTinTuc(0,10);
            if(isset($_GET['ma'])){
                $data_chitietTin = $this->news_model->getChiTietTin($_GET['ma']);
            }
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
