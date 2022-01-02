
    <nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="#">
                <img src="../public/images/pmc-logo.png" alt=""> 
            </a>
        </div>
        <ul id="sidebar_menu" class="metismenu">          
            <li>
                <a class="has-arrow" href="../index.php" aria-expanded="true">
                    <div class="icon_menu">
                        <i class="fas fa-home"></i>
                        <span>Trang chủ</span>
                    </div>
                </a>
            </li>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=nguoidung" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-user" aria-expanded="true"></i>
                            <span>Quản lý tài khoản</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin']) || isset($_SESSION['isLogin2_Nhanvien'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=sanpham" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-seedling"></i>
                            <span>Quản lý sản phẩm</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=loaisanpham" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-cloud-meatball"></i>
                            <span>Quản lý loại sản phẩm</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=bill" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>Quản lý hóa đơn</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=category" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-list"></i>
                            <span>Quản lý danh mục sản phẩm</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=khuyenmai" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-balance-scale-left"></i>
                            <span>Quản lý khuyến mãi</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_GiaoHang'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=order" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-balance-scale-left"></i>
                            <span>Quản lý đơn hàng</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=banner" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="far fa-image"></i>
                            <span>Quản lý banner</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php
                if(isset($_SESSION['isLogin2_Admin'])){ ?>
                <li>
                    <a class="has-arrow" href="?mod=login" aria-expanded="true">
                        <div class="icon_menu">
                            <i class="fas fa-balance-scale-left"></i>
                            <span>Thống kê</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>