<?php
require_once("Models/login.php");
class LoginController
{
   
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
    }
  
    function list()
        {   
            // data_danhmuc để gọi lại thanh nav .  :v
            $data_danhmuc = $this->login_model->danhmuc();
           
            if(isset($_GET['iduser']))
            {   
               
                $MaND = $_GET['iduser'];
                $data = $this->login_model->infor($MaND);
               
            }
            else {
                echo "Lỗi  từ controler rồi";
            }
            require_once('./Views/indexview.php');     
        }
       


        
    function login()
    {
       
        $data_danhmuc = $this->login_model->danhmuc();

        require_once('Views/indexview.php');
    }
    function login_action()
    {

        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
        );
        $this->login_model->login_action($data);
    }

    function dangky(){
        $data_danhmuc = $this->login_model->danhmuc();
        require_once("Views/indexview.php");
    }
    
    function dangky_action()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $check1 = 0;
        $check2 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['Email'] == $_POST['Email'] || $value['TaiKhoan'] == $_POST['TaiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['MatKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }

        $data = array(
            'Ho' =>    $_POST['Ho'],
            'Ten'  =>   $_POST['Ten'],
            'GioiTinh' => "",
            'SDT' => $_POST['SĐT'],
            'Email' =>    $_POST['Email'],
            'DiaChi'  =>   "",
            'TaiKhoan' => $_POST['TaiKhoan'],
            'MatKhau' => md5($_POST['MatKhau']),
            'MaQuyen' =>  '1',
            'TrangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }    
        $this->login_model->dangky_action($data, $check1, $check2);
    }
    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {   
        $data_danhmuc = $this->login_model->danhmuc();
        $data = $this->login_model->account();
        //$this->list();
        require_once('Views/indexview.php');
    }

    
    // Cập nhật 
    function updateinfo(){
       
        if(isset($_POST['Ho']))
        {  
            
            setcookie( "doimk", "", time()- 60, "/","", 0);
            $data = array(
                'Ho' =>    $_POST['Ho'],
                'Ten'  =>   $_POST['Ten'],
                'TaiKhoan' => $_POST['TaiKhoan'],
                'SDT' => $_POST['SDT'],
                'Email' =>$_POST['Email'],
                'DiaChi'  =>   $_POST['DiaChi']
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $passOrinfo = "info";
            $this->login_model->updateInfor($data,$passOrinfo);
          
        }
        else{
            $passOrinfo = "pass";
            if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                if (md5($_POST['MatKhau']) == $_SESSION['login']['MatKhau']) {
                    $data = array(
                        'MatKhau' => md5($_POST['MatKhauMoi']),
                    );
                    $this->login_model->updateInfor($data,$passOrinfo);
                } else {
                    setcookie('doimk', 'Mật khẩu không đúng', time() + 2);
                }
            } else {
                setcookie('doimk', 'Mật khẩu mới không trùng nhau', time() + 2);
            }
        }
        
        header('location: ?act=taikhoan&xuli=account#doitk');
    }


    
}
?>
