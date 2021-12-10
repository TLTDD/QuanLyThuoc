<?php
	//echo "<script>alert('có mặt')</script>";
	require_once("./Models/typeproduct.php");

class LoaisanphamController
{
	var $loaisanpham_model;
	function __construct()
	{
		$this->loaisanpham_model = new loaisanpham();
	}
	public function getTypeByIdCate($idcate)
	{
		echo "<script>alert('có mặt')</script>";
		$data = array();
		$data = $this->loaisanpham_model->getTypeById($idcate); 
		return $data;
	}
	public function list()
	{	
		$data = array();
		$data = $this->loaisanpham_model->all(); 
		require_once("./Views/indexAD.php");
	}

	public function add()
	{
		$data = $this->loaisanpham_model->danhmuc();
		require_once("./Views/indexAD.php");
	}
	public function store()
	{
		$data = array(
			'TenLSP' => $_POST['TenLSP'],
			'MoTa' => $_POST['MoTa'],
			'MaDM' => $_POST['MaDM']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
		}	
		$this->loaisanpham_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->loaisanpham_model->find($id);
		require_once("./Views/indexAD.php");
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->loaisanpham_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data_detail = $this->loaisanpham_model->find($id);

		$data = $this->loaisanpham_model->danhmuc();

		require_once("./Views/indexAD.php");
	}
	public function update()
	{
		$data = array(
			'MaLSP' => $_POST['MaLSP'],
			'TenLSP' => $_POST['TenLSP'],
			'MoTa' => $_POST['MoTa'],
			'MaDM' => $_POST['MaDM']
		);

		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
		}
		$this->loaisanpham_model->update($data);
	}
}
?>