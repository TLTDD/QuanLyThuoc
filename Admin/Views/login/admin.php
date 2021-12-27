 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
   </div>
  <table class="table table-striped table-bordered table-hover">
    <tr style="background-color:#007bff;" class="head_table_tk">
      <th>Khách hàng</th>
      <th>Doanh thu tháng nay</th>
      <th>Doanh thu năm nay</th>
    </tr>
    <tr class="head_table_tk_ct">
      <th><?= $data_nguoidung['Count'] ?> người</th>
      <th><?= number_format($data_countM['Count']) ?> VNĐ</th>
      <th><?= number_format($data_countM['Count']) ?> VNĐ</th>
    </tr>
  </table>
  <div class="chart-box">
    <div class="container">
      <div class="row">
        <div class="card mt-4 mb-4 col col-md-6">
          <div class="card-header">Đơn hàng</div>
          <div class="card-body">
            <div class="chart-container pie-chart">
              <canvas id="bar_chart"></canvas>
            </div>
          </div>
        </div>
        <div class="card mt-4 mb-4 col col-md-6">
          <div class="card-header">Doanh thu của năm</div>
          <div class="card-body">
            <div class="chart-container pie-chart">
              <canvas id="line_chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>

 <script>
   $(document).ready(function(){


  makechart();
  lineChart();

  function makechart()
  {
    $.ajax({
      url:"Views/login/hoadon.php",
      method:"POST",
      data:{action:'fetch'},
      dataType:"JSON",
      success:function(data)
      {
        console.log(data);
        var TrangThai = [];
        var total = [];
        var color = [];

        for(var count = 0; count < data.length; count++)
        {
          if(data[count].TrangThai === '1') {
            data[count].TrangThai = 'Đã duyệt'
          }else {
            data[count].TrangThai = 'Chưa duyệt'
          }
          TrangThai.push(data[count].TrangThai);
          total.push(data[count].total);
          color.push(data[count].color);
          console.log(color);
        }

        var chart_data = {
          labels:TrangThai,
          datasets:[
            {
              label:'Trạng thái',
              backgroundColor:color,
              color:'#fff',
              data:total
            }
          ]
        };

        var options = {
          responsive:true,
          scales:{
            yAxes:[{
              ticks:{
                min:0
              }
            }]
          }
        };

        var group_chart3 = $('#bar_chart');

        var graph3 = new Chart(group_chart3, {
          type:'doughnut',
          data:chart_data,
          options:options
        });
      }
    })
  }

  function lineChart() {
    $.ajax({
      url:"Views/login/doanhthu.php",
      method:"POST",
      data:{action:'fetch'},
      dataType:"JSON",
      success:function(data)
      {
        console.log(data);
        var Thang = [];
        var total = [];

        for(var count = 0; count < data.length; count++)
        {
          if(data[count][0].total === null) {
            data[count][0].total = 0
          }
          console.log(data[count][0]);
          Thang.push(data[count][0].month);
          total.push(data[count][0].total);
        }

        const dataLine = {
					labels: ['Tháng 1', 'Tháng 2', 'Tháng 3','Tháng 4', 'Tháng 6', 'Tháng 6','Tháng 7', 'Tháng 8', 'Tháng 9','Tháng 10', 'Tháng 11', 'Tháng 12'],
					datasets: [{
						label: 'Doanh thu',
						data: total,
						fill: false,
						borderColor: 'rgb(75, 192, 192)',
						tension: 0.1
					}]
				};
				var group_chart4 = $('#line_chart')
				var graph4 = new Chart(group_chart4, {
					type:'line',
					data:dataLine
				});
      }
    })
  }

  });
 </script>