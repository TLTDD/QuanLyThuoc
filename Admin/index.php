<?php
session_start();
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'sanpham':
            require_once('Controllers/ProductController.php');
            $controller_obj = new ProductController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
               case 'add':
                    $controller_obj->add();
                    break;
               case 'store':
                    $controller_obj->store();
                    break;
                 case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->callUpdate();
                    break;
                case 'update':
                    $controller_obj->update(); 
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'nguoidung':
            require_once('Controllers/UserController.php');
            $controller_obj = new NguoiDungController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
            case 'khuyenmai':
                require_once('Controllers/KhuyenmaiController.php');
                $controller_obj = new KhuyenmaiController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    case 'add':
                        $controller_obj->add();
                        break;
                    case 'store':
                        $controller_obj->store();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'edit':
                        $controller_obj->edit();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
        case 'loaisanpham':
            require_once('Controllers/TypeProductController.php');
            $controller_obj = new LoaisanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;    
            case 'category':
                require_once('./Controllers/CategoryController.php');
                $controller_obj = new CategoryController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    case 'add':
                        $controller_obj->add();
                        break;
                    case 'store':
                        $controller_obj->store();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'edit':
                        $controller_obj->edit();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break; 
            case 'bill':
                require_once('Controllers/BillController.php');
                $controller_obj = new HoadonController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'chitiet':
                        $controller_obj->chitiet();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'xetduyet':
                        $controller_obj->xetduyet();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;  
            case 'order':
                require_once('Controllers/OrderController.php');
                $controller_obj = new OrderController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'chitiet':
                        $controller_obj->chitiet();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'xetduyet':
                        $controller_obj->xetduyet();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break; 
        default:
        header('location: ?mod=nguoidung');
        }
?>