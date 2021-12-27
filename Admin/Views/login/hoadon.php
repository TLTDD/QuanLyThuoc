<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=data_medicine", "root", "");

if(isset($_POST["action"]))
{

	if($_POST["action"] == 'fetch')
	{
		$query = "
			SELECT TrangThai,count(MaHD) as Total FROM HoaDon GROUP BY TrangThai
		";

		$result = $connect->query($query);
		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'TrangThai'		=>	$row["TrangThai"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data);
	}
}


?>