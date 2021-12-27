 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
   </div>
  <table class="table table-striped table-bordered table-hover">
    <tr style="background-color:#007bff;" class="head_table_tk">
      <th>Khách hàng</th>
      <th>Hóa đơn chưa duyệt</th>
      <th>Hóa đơn đã duyệt</th>
      <th>Doanh thu tháng nay</th>
      <th>Doanh thu năm nay</th>
    </tr>
    <tr class="head_table_tk_ct">
      <th><?= $data_nguoidung['Count'] ?> người</th>
      <th style="color:red;"><?= $data_hd['Count'] ?> hóa đơn</th>
      <th><?= $data_hd_cd['Count'] ?> hóa đơn</th>
      <th><?= number_format($data_countM['Count']) ?> VNĐ</th>
      <th><?= number_format($data_countM['Count']) ?> VNĐ</th>
    </tr>
  </table>
 </div>