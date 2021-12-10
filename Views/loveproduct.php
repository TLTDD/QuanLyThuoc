<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruity Fresh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="" class="header__logo">
                        <img src="./images/logo.webp" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="search-box">
                        <div class="header__search">
                            <form action="">
                                <span class="input-group">
                                    <button class="search-submit" type="button">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
                                    </button>
                                </span>
                                <input type="text" placeholder="Tìm kiếm sản phẩm..." class="search-text">
                            </form>
                            <div class="result__box">
                            </div>
                        </div>
                        <div class="group__contact">
                            <div class="contact__phone">
                                <p>Hỗ trợ online</p>
                                <a href="">0947895039</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="group__account">
                        <ul class="group__account-list">
                            <li>
                                <div class="heart__icon">
                                    <a href="">
                                        <i class="far fa-heart"></i>
                                        <span class="cart-icon__count">2</span>
                                    </a>
                                </div>
                                
                            </li>
                            <li>
                                <div class="cart-icon">
                                    <a href="">
                                        <i class="fas fa-cart-arrow-down"></i>
                                        <span class="cart-icon__count">2</span>
                                    </a>
                                </div>
                                <div class="cart-down">

                                </div>
                            </li>
                            <li>
                                <div class="user">
                                    <a href="">
                                        <i class="fas fa-user"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="nav">
        <div class="container">
            <ul class="nav-list">
                <li class="nav-list__item active"><a href="">Trang chủ</a></li>
                <li class="nav-list__item">
                    <a href="">
                        Sản phẩm
                    </a>
                    <i class="fas fa-chevron-down"></i>
                    <ul class="nav-item__down">
                        <li class="nav-item__down-item"><a href="">Gia vi</a></li>
                        <li class="nav-item__down-item"><a href="">Dầu ăn</a></li>
                        <li class="nav-item__down-item"><a href="">Bánh kẹo</a></li>
                        <li class="nav-item__down-item"><a href="">Rau củ quả</a></li>
                        <li class="nav-item__down-item"><a href="">Sữa uống</a></li>
                    </ul>
                </li>
                <li class="nav-list__item"><a href="">Bánh kẹo</a></li>
                <li class="nav-list__item"><a href="">Đồ khô, gạo</a></li>
                <li class="nav-list__item"><a href="">Liên hệ</a></li>
                <li class="nav-list__item"><a href="">Tin tức</a></li>
            </ul>
        </div>
    </nav>
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
                            <span>Yêu thích</span>
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

                            

                        </div>
                        <div class="product-list col-lg-9">
                            <div class="container">
                                <div class="product-list__title row">
                                    <h1 >Yêu thích của tôi</h1>
                                </div>
                                <div class="row"> 
                                    <div class="col col-product__item">
                                        <form action="" >
                                            <div>
                                        <div class="product-item__sale-off">
                                                <span class="home-product-item__percent">10%</span>
                                                <label class ="home-product-item__label" for="">Giảm</label>
                                        </div>
                                        <a href=""><i class="product-item-icon far fa-heart"></i></a>
                                        </div>
                                            <div class="product-img">
                                                <a href="">
                                                    <span class ="img--hover"></span> 
                                                    <img src="./images/pro20-grande.webp" alt="">
                                                </a>
                                            </div>
                                            <div class="product-fruits__infos">
                                                <h2 class="tilte-name-product-t">500g cá khô sạch con to</h2>
                                                <div>
                                                <span class="price-new">60.000đ</span>
                                                <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                                <span class="price-old">60.000đ</span>
                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col col-product__item">
                                        <form action="" >
                                            <div>
                                        <div class="product-item__sale-off">
                                                <span class="home-product-item__percent">10%</span>
                                                <label class ="home-product-item__label" for="">Giảm</label>
                                        </div>
                                        <a href=""><i class="product-item-icon far fa-heart"></i></a>
                                        </div>
                                            <div class="product-img">
                                                <a href="">
                                                    <span class ="img--hover"></span> 
                                                    <img src="./images/pro20-grande.webp" alt="">
                                                </a>
                                            </div>
                                            <div class="product-fruits__infos">
                                                <h2 class="tilte-name-product-t">500g cá khô sạch con to</h2>
                                                <div>
                                                <span class="price-new">60.000đ</span>
                                                <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                                <span class="price-old">60.000đ</span>
                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col col-product__item">
                                        <form action="" >
                                            <div>
                                        <div class="product-item__sale-off">
                                                <span class="home-product-item__percent">10%</span>
                                                <label class ="home-product-item__label" for="">Giảm</label>
                                        </div>
                                        <a href=""><i class="product-item-icon far fa-heart"></i></a>
                                        </div>
                                            <div class="product-img">
                                                <a href="">
                                                    <span class ="img--hover"></span> 
                                                    <img src="./images/pro20-grande.webp" alt="">
                                                </a>
                                            </div>
                                            <div class="product-fruits__infos">
                                                <h2 class="tilte-name-product-t">500g cá khô sạch con to</h2>
                                                <div>
                                                <span class="price-new">60.000đ</span>
                                                <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                                <span class="price-old">60.000đ</span>
                
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col col-product__item">
                                        <form action="" >
                                            <div>
                                        <div class="product-item__sale-off">
                                                <span class="home-product-item__percent">10%</span>
                                                <label class ="home-product-item__label" for="">Giảm</label>
                                        </div>
                                        <a href=""><i class="product-item-icon far fa-heart"></i></a>
                                        </div>
                                            <div class="product-img">
                                                <a href="">
                                                    <span class ="img--hover"></span> 
                                                    <img src="./images/pro20-grande.webp" alt="">
                                                </a>
                                            </div>
                                            <div class="product-fruits__infos">
                                                <h2 class="tilte-name-product-t">500g cá khô sạch con to</h2>
                                                <div>
                                                <span class="price-new">60.000đ</span>
                                                <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                                <span class="price-old">60.000đ</span>
                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                 
                                   
                                    
                                    
                                    


                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>


        </div>


        </div>

    </section>
    
</body>

</html>