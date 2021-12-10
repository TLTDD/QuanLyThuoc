<a href="?mod=order&id=1" type="button" class="btn btn-primary">Đã giao</a>
<a href="?mod=order&id=0" type="button" class="btn btn-primary">Chưa giao</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tên Khách Hàng</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SĐT</th>
      <th scope="col">Trạng thái</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) {
         if($row['TrangThai']==1){
      ?>
      <tr>
        <td><?= $row['NguoiNhan'] ?></td>
        <td><?= $row['NgayLap'] ?></td>
        <td><?= number_format($row['TongTien']) ?>VNĐ</td>
        <td><?= $row['DiaChi'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?php if($row['TrangThaiDH']==0 ){
            echo 'Chưa giao';
        }else{
            echo 'Đã giao';
        }
        ?></td>
        <td>
          <a href="?mod=order&act=chitiet&id=<?= $row['MaHD'] ?>" class="btn btn-success" >Xem chi tiết</a>
          <a href="?mod=order&act=delete&id=<?= $row['MaHD'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php }} ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>