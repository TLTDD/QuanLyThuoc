
<main id="main">
<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="#">
                    <span>Trang chủ</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <a href="#">
                    <span>Sản phẩm nổi bật</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
            </div>
            <div>
                <strong>
                    <span><?php echo $data_sanpham[0]['TenSP']; ?></span>
                </strong>
            </div>
        </div>
    </div>
<?php  
    if(isset($_GET['km'])){
        $km = $_GET['km'];
        $status = true;
    }else{
        $status = false;
    }
?>
    <div class="row mb-4">
        <div class="col col-lg-4">
            <div class="product-detail-left">
                <div id="product-detail-left__thumbnail" class="<?php if($status == true) echo "product-detail-left__thumbnail--sale "?>">
                    <img src="./public/images/<?php echo $data_sanpham[0]['hinhanh']; ?>" alt="" class="product-detail-left__image-main">
                </div>
                <div class="product-detail-left__list-thumb">
                    <ul>
                        <?php for ($i=0; $i < count($data_sanpham) ; $i++) { ?>
                            <li class=""><img src="./public/images/<?php echo $data_sanpham[$i]['hinhanh'] ?>" alt=""></li>
                        <?php } ?>
                        <!-- <li><img src="./public/images/pro29-grande.jpg" alt=""></li>
                        <li><img src="./public/images/pro28-grande.jpg" alt=""></li> -->
                    </ul>
                    <div class="product-detail-left__control">
                        <span class="product-detail-left__control-left">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span class="product-detail-left__control-right">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-5">
            <div class="product-detail-main">
                <h2 class="tilte-name-product-detail"><?php echo $data_sanpham[0]['TenSP']; ?></h2>
                <div class="product-detail-main__price">
                    <span class="product-detail-main__price-new"><?php echo number_format($data_sanpham[0]['DonGia']); ?> đ</span>
                    <?php if($status == true) { ?>
                    <span class="product-detail-price__old"><?php echo number_format($data_sanpham[0]['giaCu']); ?> đ</span>
                    <span class="product-detail-price__sale"><?= $km ?>%</span>
                    <?php } ?>
                </div>
                <div class="product-detail-main__desc">
                    <p class="product-detail-main__desc-text">
                        <?php echo $data_sanpham[0]['desc'] ?>
                    </p>
                </div>
            </div>
            <form action="./Controllers/CartController.php" method="post">
                <div class="custom-quantity">
                    <a class="btn-minus" href="?act=cart&xuli=delete&id=<?php echo $data_sanpham[0]['MaSP'];?>" >
                        <i class="fas fa-minus"></i>
                    </a>
                    <input type="text" class="qty-input" value="1" name="slsanpham">
                    <a class="btn-plus" href="?act=cart&xuli=update&id=<?php echo $data_sanpham[0]['MaSP'];?>">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <div class="group-button-add">
                    <a href="?act=cart&xuli=add&id=<?php echo $data_sanpham[0]['MaSP']; ?>&sl=1" class="add-cart btn-add-cart" data-id="<?php echo $data_sanpham[0]['MaSP']; ?>">Cho vào giỏ hàng</a>
                    <a href="" class="buy-now">Mua ngay</a>
                </div>
            </form>
        </div>
        <div class="col col-lg-3">
            <a href="" class="product-detail-banner">
                <img src="./public/images/banner_detail.webp" alt="">
            </a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col col-lg-12">
            <div class="product_getcontent">
                <div class="product-tab-title">
                    <span>Mô tả</span>
                </div>
                <div class="product-tab-desc product-tab-desc__element">
                    <?php echo $data_sanpham[0]['mota']; ?>
                </div>
                <div class="view-button-toggle">
                    <button class="btn-view-more">Xem thêm</button>
                </div>
            </div>
        </div>
    </div>

    <section id="product-dry">
        <div class="container">
            <div class="populator__head">
                <div>
                    <h2 class="populator__head-title">
                        <a href="">Các sản phẩm liên quan</a>
                    </h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="owl-slider-dry">
                <div class="product-main">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="">
                                <img src="./public/images/images-dry/sp26.jpg" alt="">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product">Kỷ tử khô đỏ - loại đẹp 100g</h2>
                            <span class="price-text">60.000đ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
                        </div>
                    </form>
                </div>
                <div class="product-main">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="">
                                <img src="./public/images/images-dry/sp27.jpg" alt="">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product">Bò khô que hộp 250g</h2>
                            <span class="price-text">60.000đ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
                        </div>
                    </form>
                </div>
                <div class="product-main">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="">
                                <img src="./public/images/images-dry/sp28.jpg" alt="">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product">500g cá khô sạch con to</h2>
                            <span class="price-text">60.000đ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
                        </div>
                    </form>
                </div>
                <div class="product-main">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="">
                                <img src="./public/images/images-dry/sp29.webp" alt="">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product">Trứng gà</h2>
                            <span class="price-text">60.000đ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
                        </div>
                    </form>
                </div>
                <div class="product-main">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="">
                                <img src="./public/images/pro20-grande.webp" alt="">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product">Chuối Tiêu Quê Loại To</h2>
                            <span class="price-text">60.000đ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
                        </div>
                    </form>
                </div>
                <div class="product-main">
                    <form action="">
                        <div class="product-fruits__thumb">
                            <a href="">
                                <img src="./public/images/pro20-grande.webp" alt="">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product">Chuối Tiêu Quê Loại To</h2>
                            <span class="price-text">60.000đ</span>
                            <button class="button-add-product">Cho vào giỏ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</main>

        
   
    
