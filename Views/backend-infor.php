<?php
  
    function getKey() {
    $link = mysqli_connect("localhost", "root", "", "webfood");
    if($link === false){
        echo("ERROR: Không thể kết nối. " .mysqli_connect_error());
       
    }
    else
       
    if(isset($_REQUEST["term"])){
        $term = $_REQUEST["term"];
        
        // Chuẩn bị câu lệnh SQL SELECT
         $sql = "SELECT * FROM NGUOIDUNG WHERE TaiKhoan = ?"; 
   
        if($stmt = mysqli_prepare($link, $sql)){
            // Liên kết biến đến câu lệnh đã chuẩn bị như là tham số
            mysqli_stmt_bind_param($stmt, "s", $param_term);
            // Thiết lập các tham số
            $param_term = $_REQUEST["term"];
            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
               
                // Kiểm tra số lượng row trong kết quả
                if(mysqli_num_rows($result) > 0){ 
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                            
                        <p class="title-name-result title-name-result--false"><?php echo "Tên đăng nhập ". $term ."đã tồn tại"."; hãy thử dùng ".$term."abc123" ?></p>
                               
                        <?php } ?>
                   
                <?php
                } else{ ?>
                    <p  class="title-name-result">Tên đăng nhập hợp lệ</p>
                <?php } ?>
                <?php
            } else{
                echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
            }
            // Đóng câu lệnh
             mysqli_stmt_close($stmt);
        }
        else{
            echo "sai if đầu";
        }
            
       
        
    }
    // Đóng kết nối
    mysqli_close($link);

    }
    getKey()
?>

