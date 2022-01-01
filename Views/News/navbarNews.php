<section class="blogpage clearfix">
    <div class="container" itemscope="" itemtype="https://schema.org/Blog">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <aside class="aside-item blog-sidebar sidebar-category collection-category margin-bottom-25">
                    <h2 class="title-block"><span class="leaf">Danh mục tin</span></h2>
                    <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                <li class="nav-item"><a class="nav-link" href="?act=home">Trang chủ</a></li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Sản phẩm
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="?act=product&cate=3">Chăm sóc cá nhân</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?act=product&cate=4#">Sản phẩm tiện lợi
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?act=product&cate=7">Mẹ và bé</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?act=product&cate=8">Thiết bị y tế</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Sản phẩm phòng dịch</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?act=product&cate=6">Rau củ quả
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Thực phẩm chức năng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dược phẩm
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="#">Sản phẩm bán chạy
                                            </a>                   
                                        </li>
                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="#">Sản phẩm nổi bật
                                            </a>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fa-plus svg-inline--fa fa-caret-down fa-w-10"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" class=""></path></svg>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="nav-item lv3">
                                                    <a class="nav-link" href="#">Đồ dùng gia đình
                                                    </a>
                                                </li>
                                                <li class="nav-item lv3">
                                                    <a class="nav-link" href="#">Đồ cho bé</a>
                                                </li>
                                            </ul>                      
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="?act=product&cate=6">Sản phẩm phòng dịch</a></li>
                                <li class="nav-item"><a class="nav-link" href="?act=product&cate=8">Thiết bị y tế</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Tin tức
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tin nổi bật</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tin mẹo hay</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Vlog nhà bếp</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Hệ thống cửa hàng</a></li>
                            </ul>
                        </nav>
                    </div>
                </aside>
        <div class="blog-aside aside-item blog-aside-article">
            <h2 class="title-block"><a class="leaf" href="#" title="Tin nổi bật">Tin nổi bật</a></h2>
            <div class="aside-content-article aside-content margin-top-0">
                <div class="blog-list blog-image-list">
                    <?php
                        foreach ($data_tinTucNoiBat as $item) { ?>
                            <div class="loop-blog">
                                <div class="thumb-left">
                                    <a href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>">	
                                        <img class="lazyload loaded" src="./public/images/<?= $item['HinhAnh'];?>" title="Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon" alt="<?= $item['TieuDe'];?>" data-was-processed="true" width="100" height="70">
                                    </a>
                                </div>
                                <div class="name-right">
                                    <h3><a 
                                    href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>" title="<?= $item['TieuDe'];?>"><?= $item['TieuDe'];?></a></h3>
                                </div>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>