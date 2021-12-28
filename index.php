<?php
session_start();
// unset($_SESSION['isLogin2_Nhanvien']);
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'home':
        require_once('./Controllers/HomeController.php');
        $objCate = new homeController();
        $objCate->list();
        break;
    case "search":
        require_once('./Controllers/ProductController.php');
        $objCate = new ProductController();
        $objCate->list();
        break;
    case 'product':    
        require_once('./Controllers/HomeController.php');
        $objCate = new homeController();
        $objCate->list();
        break;
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('Controllers/LoginController.php');
        $controller_obj = new LoginController();
        if ((isset($_SESSION['isLogin2']) && $_SESSION['isLogin2'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
                case 'account':
                    $controller_obj->account();
                    break;
                case 'updateinfo':
                    $controller_obj->updateinfo();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin2_Admin']) && $_SESSION['isLogin2_Admin'] == true) || (isset($_SESSION['isLogin2_Nhanvien']) && $_SESSION['isLogin2_Nhanvien'] == true) || (isset($_SESSION['isLogin2_GiaoHang']) && $_SESSION['isLogin2_GiaoHang'] == true) ) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $controller_obj->account();
                        break;
                    case 'updateinfo':
                        $controller_obj->updateinfo();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();
                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    case 'dangky_action':
                        $controller_obj->dangky_action();
                        break;
                    default:
                         $controller_obj->login();
                    break; 
                }
                break;
            }
            break;
        }
        break;
    case "detail":
        require_once('./Controllers/DetailController.php');
        $objCate = new DetailController();
        $objCate->list();
        break;
    case 'orderMy': 
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('./Controllers/OrderMyController.php');
        $objOrder = new OrderMyController();
        switch ($act) {
            case 'list':
                $objOrder->list_order();
                break;
            case 'delete-order':
                $objOrder->deteteHoaDon();
                break;
            case 'order-detail':
                $objOrder->orderDetail();
                break;
        }break;
    case 'cart':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            $sl = isset($_GET['sl']) ? $_GET['sl'] : 1;
            require_once('Controllers/CartController.php');
            $controller_obj = new CartController();
            switch ($act) {
                case 'list':
                    $controller_obj->list_cart();
                    break;
                case 'update':
                    $controller_obj->update_cart();
                    break;
                case 'delete':
                    $controller_obj->delete_cart_item();
                    break;
                case 'delete-cart':
                    $controller_obj->delete_cart();
                    break;
                case 'add':
                    $controller_obj->add_cart($sl);
                    break;
                break;
            }
            break;
    case 'pay':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/PayController.php');
        $controller_obj = new PayController();
        switch ($act) {
            case 'list':
                $controller_obj->list_cart();
                break;
            case 'saved':
                $controller_obj->save();
                break;
            case 'order_complete':
                $controller_obj->order_complete();
                break;
            default:
                $controller_obj->list_cart();
                break;
        } break;
    case 'news':
        require_once('Controllers/newsController.php');
        $objCate = new newsController();
        $objCate->list();
        break;
    case 'contact':
            require_once('Controllers/ContactController.php');
            $objCate = new newsController();
            $objCate->list();
            break;
    default : 
        require_once('home.php');
}

?>