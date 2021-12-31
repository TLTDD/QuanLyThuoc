<main class="order-detail">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">&nbsp;/ &nbsp;</span>
                </div>
                <div>
                    <span>Đơn hàng</span>
                    <span class="mr_lr">&nbsp;/ &nbsp;</span>
                    <strong>
                        <span>Đơn hàng # <?php echo $_GET['maHD']?></span>
                    </strong>
                </div>
            </div>
        </div>

        <div class="order-detail__content">
            <div class="order-detail__head">
                <h2>Chi tiết đơn hàng 
                    <strong>#<?php echo $_GET['maHD']?></strong>
                </h2>
                <div class="order-detail__head-wrapper">
                    <div class="payment_status">
                        <span class="note">Trạng thái thanh toán:</span> 
                        <i class="status_pending">	 
                            <em>
                                <span class="span_pending" style="color: red"><strong><em>
                                    <?php if ($data_detail_order[0]['TrangThaiDH'] == 1) {
                                        echo 'Đã thanh toán';
                                    }else {echo 'Chưa thanh toán';}
                                    ?>
                                </em></strong></span>
                            </em>
                        </i>
                    </div>
                    <div class="shipping_status">
                        <span class="note">Trạng thái vận chuyển:</span> 
                        <b style="color:#212B25" class="span_">
                            <?php if($data_detail_order[0]['TrangThaiDH'] == 0) {
                                echo "Chờ vận chuyển";}
                                else if($data_detail_order[0]['TrangThaiDH'] == 1) {
                                    echo "Đã giao thành công";
                                } 
                                ?>
                        </b>
                    </div>
                </div>
            </div>
            <!-- <?php print_r($data_detail_order); ?> -->
            <div class="order-detail__center">
                <div class="row">
                    <div class="col col-ms-6">
                        <div class="box-address">
							<h2 class="title-head">Địa chỉ giao hàng</h2>
							<div class="address box-des">
								<p> 
                                    <strong>
                                    <?=$_SESSION['login2']['Ten'] ?>  <?=$_SESSION['login2']['Ho']?>
                                    </strong>
                                </p>
								<p>Địa chỉ: <?php echo $data_detail_order[0]['DiaChi'] ?></p>	
								<p>Số điện thoại: <?php echo $data_detail_order[0]['SDT'] ?></p>
							</div>
						</div>
                    </div>
                    <div class="col col-ms-3">
                        <div class="box-address">
                            <h2 class="title-head">
                                Thanh toán
                            </h2>
                            <div class="box-des">
                                <p>
                                    Thanh toán khi giao hàng (COD)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-ms-3">
                        <div class="box-address">
                            <h2 class="title-head">
                                Ghi chú
                            </h2>
                            <div class="box-des">
                                <p>
                                    <?php 
                                        if($data_detail_order[0]['ghiChu']!="") 
                                            echo $data_detail_order[0]['ghiChu'];
                                        else echo "Không có ghi chú";?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col">
                        <div class="table-order">
                            <div class="table-responsive-block table_mobile">
                                <table id="order_details" class="table table-cart">
                                    <thead class="thead-default theborder">
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_detail_order_product as $row) {?>
                                        <tr>
                                            <td class="link" data-title="Tên">
                                                <div class="image_order">
                                                    <a title="<?= $row['TenSP'] ?>" href="/ca-hoi-dong-lanh-tui-300g">
                                                    <img style="width:95px; height:95px;"src="./public/images/<?= $row['hinhanh'] ?>"></a>
                                                </div>
                                                <div class="content_right">
                                                    <a class="title_order" href="/ca-hoi-dong-lanh-tui-300g" title="<?= $row['TenSP'] ?>"><?= $row['TenSP'] ?></a>
                                                    <div class="bottom_mb">
                                                        <div class="quantity_mb">
                                                            x<?= $row['SoLuong'] ?>
                                                        </div>
                                                        <div class="sum_mb">
                                                            <?= number_format($row['DonGia']) ?>₫
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td data-title="Giá" class="numeric"><?= number_format($row['DonGia']) ?>₫</td>
                                            <td data-title="Số lượng" class="numeric"><?= $row['SoLuong'] ?></td>
                                            <td data-title="Tổng" class="numeric"><?= number_format($row['DonGia']*$row['SoLuong']) ?>₫</td>
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                            <table class="table totalorders">
                                <tfoot>
                                    <tr class="order_summary discount">
                                        <td>Khuyến mại </td>
                                        <td class="total money right">0₫</td>
                                    </tr>
                                    <tr class="order_summary ">
                                        <td colspan="">Phí vận chuyển</td>
                                        <td class="total money right">
                                            <?php 
                                                if($data_detail_order[0]['TongTien'] >=300000) {
                                                    echo '0 đ';
                                                }else {
                                                    echo number_format(25000) .' đ';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="order_summary order_total">
                                        <td>Tổng tiền</td>
                                        <td class="right"><strong style="color:#CA170E;font-size:19px;"><?php echo number_format($data_detail_order[0]['TongTien']) ?>₫</strong></td>
                                    </tr>     
                                </tfoot>
                            </table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>