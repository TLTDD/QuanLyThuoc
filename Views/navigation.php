<?php
    $act  = isset($_GET['act']) ? $_GET['act'] :"home";
    switch ($act){
        case "home":
            require_once("home.php");
            break;
        case "search":
            require_once("Search/list-search.php");
            break;
        case "product":
            require_once("product.php");
            break;
        case "taikhoan":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
        if (isset($_SESSION['isLogin2']) && $_SESSION['isLogin2'] == true) {
            switch ($act) {
                case 'login':
                    require_once("login.php");
                    break;
                case 'account':
                    require_once("infoedit.php");
                    break;
                default:
                    require_once("login.php");
                    break;
            }
        } else {
            if ((isset($_SESSION['isLogin2_Admin']) && $_SESSION['isLogin2_Admin'] == true) || (isset($_SESSION['isLogin2_Nhanvien']) && $_SESSION['isLogin2_Nhanvien'] == true)) {
                switch ($act) {
                    case 'login':
                        require_once("login.php");
                        break;
                    case 'account':
                        require_once("infoedit.php");
                        break; 
                    default:
                        require_once("login.php");
                        break;
                }
            } else {
                switch ($act) {
                    case 'login':
                        require_once("login.php");
                        break;
                    // case 'dangky_action':
                    //     require_once("login.php");
                    //     break;
                    /* case 'dangky_action':
                        require_once("login.php");
                        break; */
                    case 'dangky':
                        require_once("register.php");
                        break;
                    default:
                        require_once("register.php");
                        break;
                }
            }
            break;
        }
        break;
        case "detail":
            require_once("detailPr.php");
            break;
        case 'orderMy':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once("order/orderMy.php");
                    break;
                case 'order-detail':
                    require_once("order/orderDetail.php");
                    break;
            }break;
        case'cart':
            require_once("cart/cart.php");
            break;
        case "pay":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once("pay/pay.php");
                    break;
                case 'order_complete':
                    require_once("pay/order_complete.php");
                    break;
                default:
                    require_once("pay.php");
                    break;
            }
            break;
        case "news":
            require_once("News/news.php");
            break;
        case "contact":
                require_once("contact.php");
                break;
        default:
            require_once("error-404.php");
        break;
    }
      
?>