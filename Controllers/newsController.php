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
            
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
