<a href="?mod=bill&id=1" type="button" class="btn btn-primary">Đã duyệt</a>
<a href="?mod=bill&id=0" type="button" class="btn btn-danger">Chưa duyệt</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr  style="
    background-color: #007bff;
    color: white;">
      <th scope="col">Tên Khách Hàng</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SĐT</th>
      <th scope="col">Trạng thái</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['NguoiNhan'] ?></td>
        <td><?= $row['NgayLap'] ?></td>
        <td><?= number_format($row['TongTien']+$row['phiShip']) ?>VNĐ</td>
        <td><?= $row['DiaChi'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?php if($row['TrangThai']==0){
            echo 'Chưa xét duyệt';
        }else{
            echo 'Đã xét duyệt';
        }
        ?></td>
        <td>
          <a href="?mod=bill&act=chitiet&id=<?= $row['MaHD'] ?>&tt=<?=$row['TrangThai']?>" class="btn btn-success" >Xem chi tiết</a>
          <a href="?mod=bill&act=delete&id=<?= $row['MaHD'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" 
          class="btn btn-danger <?php if($row['TrangThai']!=0) echo 'btn-remove-none';?>">Xóa</a>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>