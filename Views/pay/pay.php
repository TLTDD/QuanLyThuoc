<main id="pay">
    <div class="container">
    <div class="pay-head">
        <h2>
            <a href="">
            Fruity Fresh
            </a>
        </h2>
        <div class="pay-head-bottom">
            <span>Thông tin nhận hàng</span>
        </div>
    </div>

    <form action="?act=pay&xuli=saved" method="POST">
        <div class="row">
            <div class="col-lg-4">
                <div class="section__content-input">
                    <div class="section__content-input__wrapper">
                        <div class="form__group field">
                            <fieldset class="form-group">
                                <label>Email</label>
                                <span class="required">*</span>
                                <input type="email" name="taikhoan" class="form-control form-control-lg" placeholder="Email" required value="<?=$_SESSION['login']['Email'] ?>"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Họ tên</label>
                                <span class="required">*</span>
                                <input type="text" name="ten" class="form-control form-control-lg" placeholder="Họ tên" required value="<?=$_SESSION['login']['Ten'] ?>  <?=$_SESSION['login']['Ho']?>"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Số điện thoại</label>
                                <span class="required">*</span>
                                <input type="tel" name="SDT" class="form-control form-control-lg" placeholder="Số điện thoại" required value=" <?=$_SESSION['login']['SDT'] ?>"/>
                            </fieldset>
                            <!-- <fieldset class="form-group">
                                <label>Địa chỉ</label>
                                <span class="required">*</span>
                                <input type="text" name="diachi" class="form-control form-control-lg" placeholder="Địa chỉ" required value="<?=$_SESSION['login']['DiaChi'] ?>"/>
                            </fieldset> -->
                            <div class="form-group">
                                <select class="form-control city" name="city" id="select" required>
                                    <option value="">Thành phố</option>
                                    <?php
                                        if(count($data) > 0) {
                                            foreach($data as $value) { ?>
    
                                        <option value="<?php echo $value['provinceid']; ?>"> <?php echo $value['name']; ?></option>
                                    <?php
                                        }}
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control huyen" name="district" id="select" required>
                                    <option value="">Huyện</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control xa" name="wards" id="select" required>
                                    <option value="">Xã</option>
                                </select> 
                            </div>
                            <div class="form-group">
                                <select class="form-control thon" name="village" id="select" required>
                                    <option value="">Thôn</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            <?php 
                $soluong = 0;
                $thanhtien = 0;
                $countProduct = 0;
                if(isset($_SESSION['productMe'])){
                foreach ($_SESSION['productMe'] as $value) {
                    $countProduct++;
                    $soluong +=1;
                    $thanhtien +=$value['ThanhTien'];
                }}
            ?>
                <div class="layout-flex">
                    <h2>Vận chuyển</h2>
                    <div class="wrapper-transport">
                        <span>Giao hàng tận nơi</span>
                        <span style="padding-right: 20px; color: red; font-weight: bold;">40.000đ</span>
                    </div>
                </div>
                <div class="layout-flex">
                    <h2>Thanh toán</h2>
                    <div class="wrapper-pay__cod">
                        <span>Thanh toán khi giao hàng(COD)</span>
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pay-order">
                    <div class="pay-order__head">
                        <h2>Đơn hàng <?php echo $soluong ?> (sản phẩm)</h2>
                    </div>
                    <div class="pay-order-list">
                        <ul>
                            <?php foreach ($_SESSION['productMe'] as $value) {?>
                            <li class="pad-order__item">
                                <div class="pad-order__item-img">
                                    <img src="./public/images/<?php echo $value['hinhanh']?>" alt="">
                                    <span class="count-product">
                                        <?php echo number_format($value['soluong'])?>
                                    </span>
                                </div>
                                <span class="pad-order__item-name">
                                    <?php echo $value['TenSP'] ?>
                                </span>
                                <span class="pay-order__item-price">
                                    <?php echo number_format($value['DonGia'])?> đ
                                </span>
                            </li>
    
                            <?php } ?>
                        </ul>
                    </div>
    
                    <div class="pay-order__total">
                        <div class="pay-order__total-wrapper">
                            <span>Tạm tính</span>
                            <span><?php echo number_format($thanhtien) ?> đ</span>
                        </div>
                        <div class="pay-order__total-wrapper">
                            <span>Phí vận chuyển</span>
                            <span>40.000đ</span>
                        </div>
                        <div class="pay-order__total-wrapper" style="border-top: 1px solid #ccc;">
                            <span>Tổng cộng</span>
                            <h2 class="pay-total__sum">
                            <?php echo number_format($thanhtien+40000); ?> đ
                            </h2>
                        </div>
                    </div>
    
                    <div class="pay-order__checkout">
                        <a href="">
                            <i class="fas fa-chevron-left"></i>
                            Quay lại giỏ hàng
                        </a>
                        <div class="pay-order__button">
                            <button class="pay-order__button-check" type="submit" name="submit">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</main>