<main id="order-my">
    <div class="container">
        <div class="order-my__head">
            <h2 style="font-size:26px; margin-bottom: 20px;">Đơn hàng của bạn</h2>

            <div class="table-all">
                <table class="table table-cart table-order" id="my-orders-table">
                    <thead class="thead-default">
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày</th>
                            <th>Địa chỉ</th>
                            <th>Giá trị đơn hàng</th>
                            <th>TT đơn hàng</th>
                            <th>Hủy đơn hàng</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(count($data_hoadon) >0) {
                            foreach($data_hoadon as $item) { ?>
                            <tr>
                                <th><?= $item['MaHD']?></th>
                                <th><?= $item['NgayLap']?></th>
                                <th><?= $item['DiaChi']?></th>
                                <th><?php echo number_format($item['TongTien'])?> đ</th>
                                <th>
                                    <?php if($item['TrangThai'] == 1)
                                            echo 'Đã xác nhận';
                                        else 
                                            echo 'Chưa duyệt';
                                    ?>
                                </th>
                                <th>
                                    <a href="?act=orderMy&xuli=delete-order&maHD=<?php echo $item['MaHD']?>" class="<?php if($item['TrangThai'] == 1)
                                            echo 'btn-usset-order__disble';
                                        else 
                                            echo 'btn-usset-order';
                                    ?>" disabled="disabled">Hủy</a>
                                </th>
                            </tr>
                        <?php  }} else {?>
                            <tr>
                                <td colspan="6">
                                    <p style="text-align: center;">Không có đơn hàng nào.</p>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>