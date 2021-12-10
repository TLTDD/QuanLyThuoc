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
        if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
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
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
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
        case'cart':
            require_once("cart/cart.php");
            break;
        case "pay":
            require_once("pay.php");
            break;
        default:
            require_once("error-404.php");
        break;
    }
      
?>