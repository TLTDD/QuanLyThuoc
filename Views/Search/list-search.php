<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="#">
                    <span>Trang chủ</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <span>Tìm kiếm</span>
                <h2 style="padding: 20px 0; font-size: 30px;">TRANG TÌM KIẾM</h2>
                <p>Đã tìm thấy <?php echo count($data)?> kết quả phù hợp</p>
            </div>
        </div>
    </div>

    <div class="row">
        <?php 
            if(isset($data) and $data != NULL){
                for ($i = 0; $i < count($data); $i++) {
                    if ($data[$i]['GiaTriKM'] == 0) {
                        $status = "product-item__sale-off--none";
                        $km = "no";
                        $makm = "";
                    }
                    else {
                        $status = "";
                        $makm = "&km=" .$data[$i]['GiaTriKM'];
                    }
                    ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="col-product__item sale-home <?= $status?>">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off <?= $status?>">
                                <span class="home-product-item__percent"><?php echo $data[$i]['GiaTriKM'] ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href="">
                                <i data-heart="<?php echo $data[$i]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                            </a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data[$i]['MaSP']?><?= $makm ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data[$i]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product"><?= $data[$i]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data[$i]['DonGia']) ?>đ</span>
                                <a href="?act=cart&xuli=add&id=<?=$data[$i]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                <span class="price-old"><?php echo number_format($data[$i]['giaCu']) ?>đ</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <?php }}else{
            echo '<p style="padding: 40px 15px;
                font-size: 40px;
                color: red;"> KHÔNG CÓ DỮ LIỆU </p>';}?>
        <!-- single product end -->
    </div>
</div>