<main id="pay">
    <div class="container">
    <div class="pay-head">
        <h2>
            <a href="?act=home">
                Pharmacity
            </a>
        </h2>
        <div class="pay-head-bottom">
            <span>Thông tin nhận hàng</span>
        </div>
    </div>
    <?php
        if(isset($_GET['httt'])){
            $class =  'wrapper-pay__cod--active';
            $param = '&httt=paypal';
            $httt = 'Thanh toán PayPal';
        }else {
            $httt = 'Thanh toán khi giao hàng(COD)';
            $param = '';
            $class = '';
        }
    ?>
    <form action="?act=pay&xuli=saved" method="POST">
        <div class="row">
            <div class="col-lg-4">
                <div class="section__content-input">
                    <div class="section__content-input__wrapper">
                        <div class="form__group field">
                            <fieldset class="form-group">
                                <label>Email</label>
                                <span class="required">*</span>
                                <input type="email" name="taikhoan" class="form-control form-control-lg" placeholder="Email" required value="<?=$_SESSION['login2']['Email'] ?>"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Họ tên</label>
                                <span class="required">*</span>
                                <input type="text" name="ten" class="form-control form-control-lg" placeholder="Họ tên" required value="<?=$_SESSION['login2']['Ten'] ?>  <?=$_SESSION['login2']['Ho']?>"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Số điện thoại</label>
                                <span class="required">*</span>
                                <input type="tel" name="SDT" class="form-control form-control-lg" placeholder="Số điện thoại" required value=" <?=$_SESSION['login2']['SDT'] ?>"/>
                            </fieldset>
                            <div class="form-group address-wrapper">
                                <div class="address-select">
                                    <span id="btn-address-select" class="btn btn-address btn-address-active">
                                        Địa chỉ
                                    </span>
                                </div>
                                <div class="address-default">
                                    <span id="btn-address-default" class="btn btn-address">
                                        Địa chỉ mặc định
                                    </span>
                                </div>
                            </div>
                            <div class="box-select-address">
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

                            <div class="box-address-default" style="display:none;">
                                <span class="address-default-span">
                                    <?= $data_address[0]['DiaChi']; ?>
                                </span>
                                <input type="text" value="<?= $data_address[0]['DiaChi']; ?>" hidden name="address-default">
                            </div>

                            <fieldset class="form-group">
                                <label>Ghi chú</label>
                                <input type="text" name="ghichu" class="form-control form-control-lg" placeholder="Ghi chú" value=""/>
                            </fieldset>
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
                if($thanhtien >=300000) {
                    $thanhtien = $thanhtien;
                    $tongTien = $thanhtien;
                    $phiship = 0;
                }else {
                    $phiship = 25000;
                    $thanhtien = $thanhtien;
                    $tongTien = $thanhtien + $phiship;
                }
            ?>
                <div class="layout-flex">
                    <h2>Vận chuyển</h2>
                    <div class="wrapper-transport">
                        <span>Giao hàng tận nơi</span>
                        <span style="padding-right: 20px; color: red; font-weight: bold;"><?= number_format($phiship);?>đ</span>
                    </div>
                </div>
                <div class="layout-flex">
                    <input type="text" hidden name="httt" 
                    value="<?php echo $httt;?>">
                    <h2>Thanh toán</h2>
                    <div class="wrapper-pay__cod">
                        <span>Thanh toán khi giao hàng(COD)</span>
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="wrapper-pay__cod <?= $class ?>">
                        <div id="paypal-payment-button">

                        </div>
                    </div>
                    <!-- <-- <div class="pay-error__note">
                        <p>*Xin lỗi tính năng này chưa hoàn thành</p>
                        
                    </div> --> 
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
                                    <img src="./public/images/<?php echo $value['hinhanh']?>" title="<?php echo $value['TenSP'] ?>">
                                    <span class="count-product">
                                        <?php echo number_format($value['soluong'])?>
                                    </span>
                                </div>
                                <span class="pad-order__item-name" title="<?php echo $value['TenSP'] ?>">
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
                            <span><?= number_format($phiship);?>đ</span>
                        </div>
                        <div class="pay-order__total-wrapper" style="border-top: 1px solid #ccc;">
                            <span>Tổng cộng</span>
                            <h2 class="pay-total__sum">
                            <?php echo number_format($tongTien); ?> đ
                            </h2>
                        </div>
                    </div>
    
                    <div class="pay-order__checkout">
                        <a href="">
                            <i class="fas fa-chevron-left"></i>
                            Quay lại giỏ hàng
                        </a>
                        <div class="pay-order__button">
                            <button class="pay-order__button-check" type="submit" name="submit">
                                <?php
                                    if(isset($_GET['httt']))
                                        echo 'Tiếp tục';
                                    else   
                                        echo 'Đặt hàng';
                                ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</main>

<script>
    (function(){
        var htmls = `
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
        `
        let btnAddressDefault = document.getElementById('btn-address-default');
        let boxAddress = document.querySelector('.box-select-address')
        let boxAddressDefault = document.querySelector('.box-address-default')
        let btnAddressSelect = document.getElementById('btn-address-select');
        btnAddressDefault.addEventListener('click', function(){
            let elements = document.querySelectorAll('.box-select-address .form-group')
            boxAddress.style.display = 'none';
            boxAddressDefault.style.display = 'block';
            btnAddressSelect.classList.remove('btn-address-active')
            this.classList.add('btn-address-active');
            for (let index = 0; index < elements.length; index++) {
                elements[index].remove()
            }
        })

        btnAddressSelect.addEventListener('click', function(){
            boxAddress.style.display = 'block';
            boxAddressDefault.style.display = 'none';
            btnAddressDefault.classList.remove('btn-address-active')
            this.classList.add('btn-address-active');
            boxAddress.innerHTML = htmls
        })

        let btnshipCode = document.querySelector('.wrapper-pay__cod')
        btnshipCode.addEventListener('click',function(){
            this.classList.toggle('wrapper-pay__cod--active')
        })

    })()
</script>

<script src="https://www.paypal.com/sdk/js?client-id=ASeCL6z6pcwYPaH7prTwln5MPRgwnQW0UVXJFJ1-0_YYF24hTSIKWF87hqQxKC7LkYGxPVBwRUSn71_B&disable-funding=credit,card"></script>
<script>
    var thanhtien = '<?php echo $tongTien ?>';
    var thanhtienviet = thanhtien/22855
    var value = parseFloat(thanhtienviet).toFixed(2);

    paypal.Buttons({
        style : {
            color: 'blue',
            shape: 'pill'
        },
        createOrder: function (data, actions) {
            return actions.order.create({
                purchase_units : [{
                    amount: {
                        value: value
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                window.location.replace("http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20TH%20WEB/QuanLyThuoc/?act=pay&httt=paypal")
            })
        },
        onCancel: function (data) {
            window.location.replace("http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20TH%20WEB/QuanLyThuoc/?act=pay")
        }
    }).render('#paypal-payment-button');
</script>