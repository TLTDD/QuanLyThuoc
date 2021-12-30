<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=data_medicine", "root", "");

if(isset($_POST["action"]))
{

	if($_POST["action"] == 'fetch')
	{
		$query = "
            Select sanpham.TenSP, SUM(chitiethoadon.SoLuong) as Tongsoluong
            from sanpham, chitiethoadon
            where sanpham.MaSP = chitiethoadon.MaSP
            group by sanpham.TenSP
            order by Tongsoluong desc
            LIMIT 5
		";

		$result = $connect->query($query);
		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'TenSP'		=>	$row["TenSP"],
				'Tongsoluong'			=>	$row["Tongsoluong"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data);
	}
}


?>