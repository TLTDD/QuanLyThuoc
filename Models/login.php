<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    public function infor($maND){
        $query = "SELECT *from nguoidung where MaND = $maND";
        require("result.php");
        return $data;
    }
   
    function login_action($data)
    {
        $query = "SELECT * from nguoidung  WHERE taikhoan = '" . $data['taikhoan'] . "' AND matkhau = '" . $data['matkhau'] . "' AND trangthai = 1";
        echo $query;
        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if($login['MaQuyen'] == 2){
                $_SESSION['isLogin2_Admin'] = true;
                $_SESSION['login2'] = $login;    
            }else{
                if($login['MaQuyen'] == 3){
                $_SESSION['isLogin2_Nhanvien'] = true;
                $_SESSION['login2'] = $login;
                }
                else{
                    if($login['MaQuyen'] == 4){
                    $_SESSION['isLogin2_GiaoHang'] = true;
                    $_SESSION['login2'] = $login;
                    }
                    else{
                        $_SESSION['isLogin2'] = true;
                        $_SESSION['login2'] = $login;
                    }
                }
            } 
            header('Location: ?mod=login');
        } else {
            setcookie('msg2', 'Đăng nhập không thành công', time() + 5);
            header('Location: ?act=taikhoan#dangnhap');
        }
        
    }
    function logout()
    {
        if(isset($_SESSION['isLogin2_Admin'])){
            unset($_SESSION['isLogin2_Admin']);
            unset($_SESSION['login2']);
        }
        if(isset($_SESSION['isLogin2_Nhanvien'])){
            unset($_SESSION['isLogin2_Nhanvien']);
            unset($_SESSION['login2']);
        }
        if(isset($_SESSION['isLogin2_GiaoHang'])){
            unset($_SESSION['isLogin2_GiaoHang']);
            unset($_SESSION['login2']);
        }
        if(isset($_SESSION['isLogin2'])){
            unset($_SESSION['isLogin2']);
            unset($_SESSION['login2']);
        }
        header('location: ?act=home');
    }
    function check_account()
    {
        $query =  "SELECT * from NguoiDung";

        require("result.php");

        return $data;
    }
    
    function dangky_action($data, $check1, $check2)
    {
        echo 'aaaa';
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO NguoiDung($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {
                    setcookie('msg', 'Đăng ký thành công', time() + 2);
                } else {
                    setcookie('msg', 'Đăng ký không thành công', time() + 2);
                }
            } else {
                setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
        }
        header('Location: ?act=taikhoan#dangky');
    }
    function account()
    {
        $id = $_SESSION['login2']['MaND'];
        return $this->conn->query("SELECT * from NguoiDung where MaND = $id")->fetch_assoc();
        
    }
    function updateInfor($data,$passOrinfo){
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
       
        $query = "UPDATE NguoiDung SET $v  WHERE MaND = ". $_SESSION['login2']['MaND'];
        echo $query;
        $result = $this->conn->query($query);
        
        if($passOrinfo=="pass")
        {
            if ($result == true) {
                setcookie('doimk', 'Cập nhật mật khẩu thành công', time() + 2);
                 header('Location: ?act=taikhoan&xuli=account#doitk');
             }else {
                 setcookie('doimk', 'Mật khẩu xác nhận không đúng', time() + 2);
                 header('Location: ?act=taikhoan&xuli=account#doitk');
             }
        }
    }
    
    function error()
    {
        header('location: ?act=errors');
    }
}
