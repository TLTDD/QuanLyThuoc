
<?php if(isset($_GET['cate']) )
        $cate = $_GET['cate'];?>
<section id="product">
    <div class="container">
        <div class="break-crumb">
            <div class="break-crumb__head">
                <div class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                        <span class="mr_lr">&nbsp;/ &nbsp;</span>
                </div>
                <div>
                    <strong>
                        <span id="danhmuc"><?php echo $data_danhmuc[$cate- 1]['TenDM'];?></span>
                    </strong>
                </div>
            </div>
        </div>
        <div class="product__content">
            <div class="container">
                <div class="row">
                    <div class="nav-left col-lg-3">
                        <div class="nav-left__category">
                            <h1>Danh mục</h1>
                            <ul class="nav-left-category__list">
                                <li class="category__item"><a href="">Trang chủ</a> </li>
                                <li class="category__item"><a href="">Sản phẩm</a></li>
                                <li class="category__item"><a href="">bánh kẹo</a></li>
                                <li class="category__item"><a href="">Đồ khô, gạo</a></li>
                                <li class="category__item"><a href="">Liên hệ</a></li>
                                <li class="category__item"><a href="">Tin tức</a></li>
                                <li class="category__item"><a href="">Hệ thống cửa hàng</a></li>
                            </ul>
                        </div>

                        <div class="nav-left__filter-product">
                            <div class="nav-left__filter-head">
                                <h2>Lọc sản phẩm</h2>
                                <span>Để tìm kiếm nhanh hơn</span>
                            </div>
                            <div class="filter-product__collocation">
                                <h1>Sắp xếp</h1>
                                <ul class="filter-product__collocation">
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="asc" id="asc" onclick="filterProduct('asc','TenSP', '<?php echo $data_danhmuc[$cate- 1]['TenDM'];?>')">
                                        <label for="asc">Tên A - Z</label><br></li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="desc" id="desc" onclick="filterProduct('desc','TenSP','<?php echo $data_danhmuc[$cate- 1]['TenDM'];?>')">
                                        <label for="desc">Tên Z - A</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="price-asc" id="price_asc" onclick="filterProduct('asc','DonGia','<?php echo $data_danhmuc[$cate- 1]['TenDM'];?>')">
                                        <label for="price_asc">Giá thấp đến cao</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="price-desc" id="price_desc" onclick="filterProduct('desc','DonGia','<?php echo $data_danhmuc[$cate- 1]['TenDM'];?>')">
                                        <label for="price_desc">Giá cao đến thấp</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" class="input-filter__radio" value="news" id="news" onclick="filterProduct('desc','ThoiGian','<?php echo $data_danhmuc[$cate- 1]['TenDM'];?>')">
                                        <label for="news">Mới nhất</label><br></li>
                                    </li>
                                    <li class="filter-collocation__item">
                                        <input type ="radio" name ="radio" id="old" class="input-filter__radio" value="old" onclick="filterProduct('Asc','ThoiGian','<?php echo $data_danhmuc[$cate- 1]['TenDM'];?>')">
                                        <label for="old">Cũ nhất</label><br></li>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter__conterner__selected filter__hiddent">
                                <div class="wrapper-filter__head">
                                    <span class="filter__conterner__title-head">
                                        <i class="fa fa-arrow-left"></i>
                                        Bạn chọn
                                    </span>
                                    <div class="filter__remove">
                                        Bỏ hết
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <div class="filter-container__selected-filter-list">
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-left__filter-product">
                            <div class="filter-product__origin">
                                <h1>Nguồn gốc</h1>
                                <ul class="filter-product__origin">
                                    <li class="filter-origin__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Đà lạt</a> </li>
                                    <li class="filter-origin__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Nhập khẩu</a></li>
                                    <li class="filter-origin__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Trong nước</a> </li>
                                </ul>
                            </div>

                        </div>
                        <div class="nav-left__filter-product">
                            <div class="filter-product__price">
                                <h1>Theo mức giá</h1>
                                <ul class="filter-product__price">
                                    <li class="filter-price__item">
                                        <label class="toggle" for="0 and 49000">
                                            <input type="checkbox" class="toggle__input" value="Dưới 50.000đ" id="0 and 49000" />
                                            <span class="toggle-track">
                                                <span class="toggle-indicator">
                                                    <span class="checkMark">
                                                        <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                            <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </span>
                                            Dưới 50.000đ
                                        </label>
                                    </li>
                                    <li class="filter-price__item">
                                        <label class="toggle" for="50000 and 100000">
                                            <input type="checkbox" class="toggle__input" value="Từ 50.000đ đến 100.000đ" id="50000 and 100000" />
                                            <span class="toggle-track">
                                                <span class="toggle-indicator">
                                                    <span class="checkMark">
                                                        <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                            <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </span>
                                            Từ 50.000đ đến 100.000đ
                                        </label>
                                    </li>
                                    <li class="filter-price__item">
                                    <label class="toggle" for="100000 and 200000">
                                        <input type="checkbox" class="toggle__input" value="Từ 100.000đ đến 200.000đ" id="100000 and 200000" />
                                        <span class="toggle-track">
                                            <span class="toggle-indicator">
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        Từ 100.000đ đến 200.000đ
                                    </label>
                                    </li>
                                    <li class="filter-price__item">
                                         <label class="toggle" for="200000 and 300000">
                                        <input type="checkbox" class="toggle__input" value="Từ 200.000đ đến 300.000đ" id="200000 and 300000" />
                                        <span class="toggle-track">
                                            <span class="toggle-indicator">
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        Từ 200.000đ đến 300.000đ
                                    </label> 
                                    </li>
                                    <li class="filter-price__item">
                                         
                                         <label class="toggle" for="300000 and 400000">
                                        <input type="checkbox" class="toggle__input" value="Từ 300.000đ đến 400.000đ" id="300000 and 400000" />
                                        <span class="toggle-track">
                                            <span class="toggle-indicator">
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        Từ 300.000đ đến 400.000đ
                                    </label>
                                    </li>
                                    <li class="filter-price__item">
                                         
                                         <label class="toggle" for="400000 and 600000">
                                        <input type="checkbox" class="toggle__input" value="Từ 400.000đ đến 600.000đ" id="400000 and 600000" />
                                        <span class="toggle-track">
                                            <span class="toggle-indicator">
                                                <span class="checkMark">
                                                    <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                        <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        Từ 400.000đ đến 600.000đ
                                    </label> 
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="nav-left__filter-product">
                            <div class="filter-product__category">
                                <h1>Loại</h1>
                                <ul class="filter-product__category">
                                    <li class="filter-category__item"><a href=""> <i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Hải sản</a> </li>
                                    <li class="filter-category__item"><a href=""> <i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Hoa quả</a></li>
                                    <li class="filter-category__item"><a href=""> <i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Thịt tươi</a> </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                    <div class="product-list col-lg-9" >
                        <div class="container">
                            <div class="product-list__title row">
                                <h1 id="product-list__title__h1"><?= $data_danhmuc[$cate -1]['TenDM'] ?></h1>
                            </div>
                        
                        <?php 
                       $count = count($data_sanpham);
                            ?>
                            <div class="row" id="product-list-main">
                                <?php 
                                if($data_sanpham != NULL)
                                {   
                                    for($i = 0;$i<$count; $i++){
                                        
                                        ?>
                                    
                                    <div class="col-product__item col col-md-4 col-lg-4">
                                        <form action="" >
                                            <div>
                                        <div class="product-item__sale-off">
                                                <span class="home-product-item__percent">10%</span>
                                                <label class ="home-product-item__label" for="">Giảm</label>
                                        </div>
                                        <a href=""><i class="product-item-icon far fa-heart"></i></a>
                                        </div>
                                            <div class="product-img">
                                                <a href="?act=detail&sp=<?=$data_sanpham[$i]['MaSP']?>" style="display: block;">
                                                    <span class ="img--hover"></span> 
                                                    <img src="./public/images/<?php echo $data_sanpham[$i]['hinhanh'] ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="product-fruits__infos">
                                                <h2 class="tilte-name-product-t"><?= $data_sanpham[$i]['TenSP']?></h2>
                                                <div>
                                                <span class="price-new"><?= number_format( $data_sanpham[$i]['DonGia']) ?>đ</span>
                                                <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                                <span class="price-old"><?php echo number_format($data_sanpham[$i]['DonGia']+ 20000) ?>đ</span>
                
                                                </div>
                                            </div>
                                        </form>
                                        <div class="clear"></div>
                                    </div>
                                <?php } }
                                
                                else 
                                    echo "Không lấy dc dữ liệu";
                                
                                ?>
                                
                            </div>
                      
                        </div>

                    </div>

                </div>

            </div>
        </div>


    </div>


    </div>

</section>

