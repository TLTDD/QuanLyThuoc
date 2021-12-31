<?php
    require_once("connection.php");
    $mysqli = new mysqli("localhost","root","","data_medicine");
    if(isset($_POST['action'])){
        $action = $_POST['action'];
        $name = $_POST['name'];
        $danhmuc = $_POST['danhmuc'];
        $loai = $_POST['loai'];
        if($loai == 'null') {
            $query = "SELECT * FROM danhmuc, loaisanpham, sanpham, hinhanh,khuyenmai WHERE danhmuc.MaDM = loaisanpham.MaDM and sanpham.MaLSP = loaisanpham.MaLSP and hinhanh.masp = sanpham.MaSP and khuyenmai.MaKM = sanpham.MaKM and danhmuc.MaDM = '{$danhmuc}' GROUP by sanpham.MaSP ORDER BY {$name} {$_POST['action']}";
        }else {
            $query = "SELECT * FROM danhmuc, loaisanpham, sanpham, hinhanh,khuyenmai WHERE danhmuc.MaDM = loaisanpham.MaDM and sanpham.MaLSP = loaisanpham.MaLSP and hinhanh.masp = sanpham.MaSP and khuyenmai.MaKM = sanpham.MaKM and loaisanpham.MaLSP = '{$loai}' GROUP by sanpham.MaSP ORDER BY {$name} {$_POST['action']}";
        }
        
        $result = $mysqli->query($query);
        $row =  $result -> fetch_array(MYSQLI_ASSOC);
        $count = count($row);
        $output = '';
        if($count > 0) {
            foreach($result as $value) {
                if ($value['GiaTriKM'] == 0) {
                    $status = "product-item__sale-off--none";
                    $km = "no";
                    $makm = "";
                }
                else {
                    $status = "";
                    $makm = "&km=" .$value['GiaTriKM'];
                }
                $output .= '<div class="col-product__item col col-md-4 col-lg-4 '.$status.'">
                <form action="" >
                    <div>
                <div class="product-item__sale-off">
                        <span class="home-product-item__percent">'.$value['GiaTriKM'].'%</span>
                        <label class ="home-product-item__label" for="">Giảm</label>
                </div>
                <a href=""><i class="product-item-icon far fa-heart"></i></a>
                </div>
                    <div class="product-img">
                        <a href="?act=detail&sp='.$value['MaSP'].''.$makm.'" style="display: block;">
                            <span class ="img--hover"></span> 
                            <img src="./public/images/'.$value['hinhanh'].'" alt="">
                        </a>
                        <p class="text-sale '.$status.' ">Sale</p>
                    </div>
                    <div class="product-fruits__infos">
                        <h2 class="tilte-name-product"> '.$value['TenSP'].'</h2>
                        <div>
                        <span class="price-new">'.number_format($value['DonGia']).'đ</span>
                        <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                        <span class="price-old '.$status.'">'.number_format($value['giaCu']).'đ</span>
                        </div>
                    </div>
                </form>
                <div class="clear"></div>
            </div>';
            }
        } else {
    
        }
    }
    echo $output;
?>

