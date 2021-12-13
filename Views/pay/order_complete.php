<main>
<?php 
    $soluong = 0;
    $thanhtien = 0;
    $countProduct = 0;
    if(isset($_SESSION['product'])){
    foreach ($_SESSION['product'] as $value) {
        $countProduct++;
        $soluong +=1;
        $thanhtien +=$value['ThanhTien'];
    }}
?>
    <div class="container">
        <div class="row">
            <div class="col col-lg-7 col-md-7">
                <div class="order-complete__head">
                    <div class="icon-check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="order-complete__head-right">
                        <h2>Cảm ơn bạn đã đặt hàng</h2>
                        <p>Một email xác nhận đã được gửi tới <?=$_SESSION['login']['Email'] ?>. Xin vui lòng kiểm tra email của bạn</p>
                    </div>
                </div>
                <div class="order-complete__content">
                    <div class="order-complete__content-left">
                        <div class="order-complete__content-infor">
                            <h2>Thông tin mua hàng</h2>
                            <span><?=$_SESSION['login']['Ten'] ?>  <?=$_SESSION['login']['Ho']?></span>
                            <span><?=$_SESSION['login']['Email'] ?></span>
                            <span><?=$_SESSION['login']['SDT'] ?></span>
                        </div>
                        <div>
                            <h2>Phương thức thanh toán</h2>
                            <span>Thanh toán khi giao hàng (COD)</span>
                        </div>
                    </div>
                    <div class="order-complete__content-right">
                        <div class="order-complete__content-infor">
                            <h2>Địa chỉ nhận hàng</h2>
                            <span><?=$_SESSION['login']['Ten'] ?> <?=$_SESSION['login']['Ho']?></span>
                            <span><?=$_SESSION['login']['DiaChi'] ?></span>
                            <span><?=$_SESSION['login']['SDT'] ?></span>
                        </div>
                        <div>
                            <h2>Phương thức vận chuyển</h2>
                            <span>Giao hàng tận nơi</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-5 col-md-5">
                <div class="order-summary__wrapper">
                    <div class="order-summary__head">
                        <h2>Đơn hàng #001</h2>
                    </div>
                    <div class="order-summary__content">
                        <div>
                            <span class="total-line__name">Tạm tính</span>
                            <span class="total-line__price"><?php echo number_format($thanhtien); ?>đ</span>
                        </div>
                        <div>
                            <span class="total-line__name">Phí vận chuyển</span>
                            <span class="total-line__price">40.000đ</span>
                        </div>
                    </div>
                    <div class="order-summary__footer">
                        <div>
                            <span>Tổng cộng</span>
                            <p class="sum-price"><?php echo number_format($thanhtien + 40000)?>đ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-back">
            <a href="?act=home" class="btn-back-home">Tiếp tục mua hàng</a>
        </div>
    </div>
</main>