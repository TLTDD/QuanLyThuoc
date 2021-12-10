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
                    ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="product-main" style="margin-bottom: 20px;">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="?act=detail&sp=<?=$data[$i]['MaSP']?>">
                                <img src="./public/images/<?=$data[$i]['hinhanh'] ?>" alt="Product Title">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product"><?= $data[$i]['TenSP'] ?></h2>
                            <span class="price-text"><?= number_format($data[$i]['DonGia']) ?> VNĐ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
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