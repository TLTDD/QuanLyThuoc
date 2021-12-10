    <div class="add-product-form">
    <a class ="btn-addproduct" href="?mod=sanpham&act=add"> Thêm mới</a>
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning alert-warning_productlist">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
    <?php } ?>
    <hr>
    <table id="dataTable" class ="product-table" cellspacing="0" width="100%">
        <thead>
            <th  class="th-firt" scope="col">Mã sản phẩm</th>
            <th  scope="col">Tên sản phẩm</th>
            <th  scope="col">Giá thành</th>
            <th  scope="col">Số lượng</th>
            <th  scope="col">Trạng thái</th>
            <th  scope="col">Thao tác</th>
        </thead>
       <?php foreach($data_product as $value){ ?>
                <tr>
                <th><?= $value['MaSP']?></th>
                <td><?= $value['TenSP'] ?></td>
                <td><?= $value['DonGia'] ?></td>
                <td><?= $value['SoLuong'] ?></td>
                <td><?= $value['TrangThai'] ?></td>
                <td>
                    <div class="">
                    <a class="btn-addproduct btnUpdate--view">Xem</a>
                        <a href="?mod=sanpham&act=edit&idsp=<?= $value['MaSP']?>" class="btn-addproduct btn--edit">Sửa</a>
                        <a href="?mod=sanpham&act=delete&idsp=<?= $value['MaSP']?>" class="btn-addproduct btnUpdate--delete" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn-addproduct btn-block btn--delete">Xóa</a>
                    </div>
                </td>
            </tr>
        <?php   }?> 
        
    </table>
    </div>
    <script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>
