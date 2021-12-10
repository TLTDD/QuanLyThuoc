<main id="main">
<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="?act=home">
                    <span>Trang chủ</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <span>Giỏ hàng</span>
            </div>
        </div>
        <h2 style="font-size: 24px;">Giỏ hàng của tôi</h2>
    </div>

    <div class="cart-page">
        <h1>Giỏ hàng của bạn</h1>
        <div class="cart-header-info">
		    <div>Thông tin sản phẩm</div>
            <div style="width: 49%; display: flex; justify-content: space-between;">
                <div>Đơn giá</div>
                <div>Số lượng</div>
                <div>Thành tiền</div>
            </div>
	    </div>
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
        <div class="cart-page-container" data-line="1">
        <?php
            if (isset($_SESSION['product']) && count($_SESSION['product']) > 0) {
                foreach ($_SESSION['product'] as $value) { ?>
                    <div class="grid__item cart_info">
                        <a href="" class="cart-page-item-image" title="Cà chua beef túi lưới 500g">
                            <img src="./public/images/<?php echo $value['hinhanh']; ?>" alt="Cà chua beef túi lưới 500g">
                        </a>
                        <div class="cart_name-wrapper">
                            <a href="" class="cart-product-name-title" title="<?php echo $value['TenSP']; ?>"><?php echo $value['TenSP']; ?></a>
                            <a class="cart-btn-remove remove-item-cart" href="?act=cart&xuli=delete-cart&id=<?=$value['MaSP']?>">Xóa</a>
                        </div>
                        <div class="price-cart-wrapper">
                            <div class="grid">
                                <div class="grid__item one-half text-right cart_prices">
                                    <span class="cart-price"><?php echo number_format($value['DonGia']); ?> đ</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="grid__item one-half cart_select">
                                <div class="custom-quantity">
                                    <a class="btn-qty-minus" href="?act=cart&xuli=delete&id=<?=$value['MaSP']?>" >
                                        <i class="fas fa-minus"></i>
                                    </a>
                                    <input type="text" class="qty-input" value="<?php echo $value['soluong']; ?>" data-value="<?php echo $value['MaSP']; ?>" name="slsanpham">
                                    <a class="btn-qty-plus" href="?act=cart&xuli=update&id=<?=$value['MaSP']?>">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="grid__item one-half text-right cart_prices">
                                    <span class="cart-price" style="margin-right: 10px;"><?php echo number_format($value['ThanhTien'])?> đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }} else{?>

            <?php  
                // if(count($_SESSION['product'])==0) {?>
                <div class="empty-cart-item">
                    <img src="./public/images/icon-empty.PNG" alt="">
                    <p>Không có sản phẩm nào trong giỏ hàng </p>
                </div>
            <?php }?>
		</div>
    </div>

    <div class="cart-page-footer">
        <div class="cart-page-footer-total">
            <p>Tổng tiền</p>
            <span>
                <?php echo number_format($thanhtien) ?>
                đ
            </span>
        </div>
        <div class="cart-page-footer-button">
            <a href="?act=pay">Thanh toán</a>
        </div>
    </div>
</main>