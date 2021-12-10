<?php 

    if(isset($_POST['idcate'])){   
      //echo "<script>alert('ngu ngo')</script>";  
        $idcate = $_POST['idcate']; 
        $idtype ="";
        if(isset($_POST['idtype'])){
          $idtype =$_POST['idtype'];
        //  echo "<script>alert(' $idtype')</script>"; 
        }
        include("../typeproduct.php");
        $controller_obj = new Loaisanpham();
        $arrayCate = $controller_obj->getTypeById($idcate);
        foreach($arrayCate as $row){    
            ?>
              <option <?= ($row['MaLSP'] == $idtype)?'selected':'' ?> value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
     <?php  }
    }
?>
<!-- -->