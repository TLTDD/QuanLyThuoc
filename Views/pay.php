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
    <div class="row">
        <div class="col-lg-4">
            <div class="section__content-input">
                <div class="section__content-input__wrapper">
                    <div class="form__group field">
                        <fieldset class="form-group">
                            <label>Email</label>
                            <span class="required">*</span>
                            <input type="email" name="taikhoan" class="form-control form-control-lg" placeholder="Email"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Họ tên</label>
                            <span class="required">*</span>
                            <input type="text" name="ten" class="form-control form-control-lg" placeholder="Họ tên"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Số điện thoại</label>
                            <span class="required">*</span>
                            <input type="tel" name="billingPhone" class="form-control form-control-lg" placeholder="Số điện thoại"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Địa chỉ</label>
                            <span class="required">*</span>
                            <input type="text" name="diachi" class="form-control form-control-lg" placeholder="Địa chỉ"/>
                        </fieldset>
                        <div class="form-group">
                            <select class="form-control city" name="" id="select">
                                <option>Thành phố</option>
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
                            <select class="form-control huyen" name="" id="select">
                                <option>Huyện</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control xa" name="" id="select">
                                <option>Xã</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <select class="form-control thon" name="" id="select">
                                <option>Thôn</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
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
                    <h2>Đơn hàng 3(sản phẩm)</h2>
                </div>
                <div class="pay-order-list">
                    <ul>
                        <li class="pad-order__item">
                            <div class="pad-order__item-img">
                                <img src="./public/images/ca-chua-beef_534552a9e4db4d9f90678b4593a96de0.webp" alt="">
                                <span class="count-product">1</span>
                            </div>
                            <span class="pad-order__item-name">
                               Cà chua beef túi lưới 500g
                            </span>
                            <span class="pay-order__item-price">
                                80.000đ
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="pay-order__total">
                    <div class="pay-order__total-wrapper">
                        <span>Tạm tính</span>
                        <span>80.000đ</span>
                    </div>
                    <div class="pay-order__total-wrapper">
                        <span>Phí vận chuyển</span>
                        <span>40.000đ</span>
                    </div>
                    <div class="pay-order__total-wrapper" style="border-top: 1px solid #ccc;">
                        <span>Tổng cộng</span>
                        <h2 class="pay-total__sum">
                            120.000đ
                        </h2>
                    </div>
                </div>

                <div class="pay-order__checkout">
                    <a href="">
                        <i class="fas fa-chevron-left"></i>
                        Quay lại giỏ hàng
                    </a>
                    <div class="pay-order__button">
                        <a href="" class="pay-order__button-check">Đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>