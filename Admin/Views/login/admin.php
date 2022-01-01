 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
   </div>
  <table class="table table-striped table-bordered table-hover">
    <tr style="background-color:#007bff;" class="head_table_tk">
      <th>Khách hàng</th>
      <th>Doanh thu tháng này</th>
    </tr>
    <tr class="head_table_tk_ct">
      <th><?= $data_nguoidung['Count'] ?> người</th>
      <th><?= number_format($data_countM['Count']) ?> VNĐ</th>
      <!-- <th><?= number_format($data_countY['Count']) ?> VNĐ</th> -->
    </tr>
  </table>
  <div class="chart-box">
    <div class="container">
      <div class="row">
        <div class="card mt-4 mb-4 col col-md-12">
          <div style="display: flex; padding: 20px;">
            <label for="">Chọn năm: </label>
            <select name="year" id="year" style="width: 200px; margin: 0 7px;">
              <option selected value="2021">
                2021
              </option>
              <option value="2022">
                2022
              </option>
            </select>
          </div>
          <div class="card-header">Doanh thu các tháng trong năm</div>
          <div class="card-body">
            <div class="chart-container pie-chart">
              <canvas id="line_chart"></canvas>
            </div>
          </div>
        </div>
        <div class="card mt-4 mb-4 col col-md-12">
          <div class="card-header">Đơn hàng</div>
          <div class="card-body">
            <div class="chart-container pie-chart">
              <canvas id="circle_chart"></canvas>
            </div>
          </div>
        </div>
        <div class="card mt-4 mb-4 col col-md-12">
          <div class="card-header">Top 5 sản phẩm bán chạy</div>
          <div class="card-body">
            <div class="chart-container pie-chart">
              <canvas id="bar_chart"></canvas>
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
  barChart();

  function makechart()
  {

    $.ajax({
      url:"Views/login/hoadon.php",
      method:"POST",
      data:{action:'fetch'},
      dataType:"JSON",
      success:function(data)
      {
        // console.log(data);
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
          // console.log(color);
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

        var group_chart3 = $('#circle_chart');

        var graph3 = new Chart(group_chart3, {
          type:'doughnut',
          data:chart_data,
          options:options
        });
      }
    })
  }

  function lineChart() {
    let selectedYear = $("#year").val(); 
    $("select#year").change(function(){
        selectedYear = $(this).children("option:selected").val();
        console.log(selectedYear);
      $.ajax({
        url:"Views/login/doanhthu.php",
        method:"POST",
        data:{action:'fetch',selectedYear: selectedYear},
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
            // else {
            //   data[count][0].total = data[count][0].total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
            //   console.log(data[count][0].total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'));
            // }
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
      });
      $.ajax({
        url:"Views/login/doanhthu.php",
        method:"POST",
        data:{action:'fetch',selectedYear: selectedYear},
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
            // else {
            //   data[count][0].total = data[count][0].total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
            //   console.log(data[count][0].total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'));
            // }
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
  function barChart() {
    $.ajax({
      url:"Views/login/spbanchay.php",
      method:"POST",
      data:{action:'fetch'},
      dataType:"JSON",
      success:function(data)
      {
        var TenSP = [];
        var Tongsoluong = [];
        // console.log(data);
        for(var count = 0; count < data.length; count++)
        {
          TenSP.push(data[count].TenSP);
          Tongsoluong.push(data[count].Tongsoluong);
        }

        const dataLine = {
					labels: TenSP,
					datasets: [{
						label: 'Số lần mua',
						data: Tongsoluong,
						backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(201, 203, 207, 0.2)'
            ],
						borderColor: 'rgb(75, 192, 192)',
						tension: 0.1,
            borderWidth: 1
					}]
				};
				var group_chart4 = $('#bar_chart')
				var graph4 = new Chart(group_chart4, {
					type:'bar',
					data:dataLine
				});
      }
    })
  }

  });
 </script>