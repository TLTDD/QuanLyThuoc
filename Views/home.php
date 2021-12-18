<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8">
                <ul class="slider-list">
                    <?php 
                        foreach($data_banner as $banner) {
                            ?>
                            <li class="slider-list__item">
                                <a href="">
                                    <img src="./public/images/<?php echo $banner['HinhAnh'] ?>" alt="">
                                </a>
                            </li>
                        <?php } ?>
                </ul>
            </div>
            <div class="col col-lg-4 col-md-4">
                <img src="./public/images/banner__right1.webp" alt="" class="slider-banner-right">
                <img src="./public/images/banner__right2.webp" alt="" class="slider-banner-right">
            </div>
        </div>
    </div>
</section>
<section id="category">
    <div class="container">
        <h2 class="category-title">Danh mục nổi bật</h2>
        <div class="category-list">
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon1.png" alt="">
                </a>
                <h3 class="category-item__name">Dược phẩm</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon2.png" alt="">
                </a>
                <h3 class="category-item__name">Chăm sóc sức khỏe</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon3.png" alt="">
                </a>
                <h3 class="category-item__name">Chăm sóc cá nhân</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon4.png" alt="">
                </a>
                <h3 class="category-item__name">Sản phẩm tiện lợi</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon5.png" alt="">
                </a>
                <h3 class="category-item__name">Thực phẩm chức năng</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon6.png" alt="">
                </a>
                <h3 class="category-item__name">Mẹ và bé</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon7.png" alt="">
                </a>
                <h3 class="category-item__name">Chăm sóc sắc đẹp</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon8.png" alt="">
                </a>
                <h3 class="category-item__name">Thiết bị y tế</h3>
            </div>
        </div>
    </div>
</section>
<section id="product-sale">
    <div class="container">
        <div class="product-sale-top">
            <div class="product-sale-text">
                <a href="">Giá sốc mỗi ngày</a>
                <p>Sản phẩm giảm giá hỗ trợ khách hàng</p>
            </div>
            <div class="product-sale-count">
                <div class="wrapper-count">
                    <div class="countdown-block">
                        <span class="days time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                    <div class="countdown-block">
                        <span class="hours time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                    <div class="countdown-block">
                        <span class="minutes time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                    <div class="countdown-block">
                        <span class="seconds time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-product-sale owl-carousel owl-theme" id="product-sale-slider">
            <?php 
                for ($i = 0; $i < (count($data_khuyenmai)); $i++) {
                    ?>
                    <div class="col-product__item sale-home">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off">
                                <span class="home-product-item__percent"><?php echo $data_khuyenmai[$i]['GiaTriKM']; ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href=""><i class="product-item-icon far fa-heart"></i></a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data_khuyenmai[$i]['MaSP']?>&km=<?php echo $data_khuyenmai[$i]['GiaTriKM']; ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data_khuyenmai[$i]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product"><?= $data_khuyenmai[$i]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data_khuyenmai[$i]['DonGia']) ?>đ</span>
                                <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                <span class="price-old"><?php echo number_format($data_khuyenmai[$i]['DonGia']+ 20000) ?>đ</span>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php } ?>
        </div>
    </div>
</section>
<section id="product-fruits">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="">TOP SẢN PHẨM PHÒNG DỊCH</a>
                </h2>
            </div>
            <a href="?act=product&cate=1" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-fruilt-slider">
            <?php 
                for ($i = 0; $i < (count($data_sanpham1)); $i++) {
                    ?>
                    <div class="product-main">
                        <form action="" method="post">
                            <div class="product-fruits__thumb">
                                <a href="?act=detail&sp=<?=$data_sanpham1[$i]['MaSP']?>">
                                    <img src="./public/images/<?=$data_sanpham1[$i]['hinhanh'] ?>" alt="Product Title">
                                </a>
                                <div class="icon-heart-product">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product"><?= $data_sanpham1[$i]['TenSP'] ?></h2>
                                <span class="price-text"><?= number_format($data_sanpham1[$i]['DonGia']) ?> VNĐ</span>
                                <a  href="?act=cart&xuli=add&id=<?=$data_sanpham1[$i]['MaSP']?>"
                                    class="button-add-product btn-add-cart" 
                                    value="<?php echo $data_sanpham1[$i]['MaSP'] ?>"
                                    name="add-button"
                                >Cho vào giỏ</a>
                            </div>
                        </form>
                    </div>
            <?php }?>
        </div>
    </div>
</section>
<section id="product-dry">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="">Mẹ và bé</a>
                </h2>
            </div>
            <a href="" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-slider-dry">
        <?php 
            for ($i = 0; $i < (count($data_sanpham2)); $i++) {
                ?>
                <div class="product-main">
                    <form action="" method="post">
                        <div class="product-fruits__thumb">
                            <a href="?act=detail&sp=<?=$data_sanpham2[$i]['MaSP']?>">
                                <img src="./public/images/<?=$data_sanpham2[$i]['hinhanh'] ?>" alt="Product Title">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product"><?= $data_sanpham2[$i]['TenSP'] ?></h2>
                            <span class="price-text"><?= number_format($data_sanpham2[$i]['DonGia']) ?> VNĐ</span>
                            <a  href="?act=cart&xuli=add&id=<?=$data_sanpham2[$i]['MaSP']?>"
                                class="button-add-product btn-add-cart" 
                                value="<?php echo $data_sanpham2[$i]['MaSP'] ?>"
                                name="add-button"
                            >Cho vào giỏ</a>
                        </div>
                    </form>
                </div>
        <?php }?>
        </div>
    </div>
</section>

<script src="./public/js/countdown.js"></script>