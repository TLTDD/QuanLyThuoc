<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://previews.123rf.com/images/marylia17/marylia171602/marylia17160200116/52748659-vector-organic-food-logo-fresh-fruit-logo-apple-logo-eco-natural-products-icon-isolated-identity.jpg" />
    <title>Fruity Fresh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/product.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <!-- Lib -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
    <script src="./public/js/jquery.js"></script>
</head>
<body>
    <?php
    require_once("footer_header/header.php");
    ?>
     <?php
     //điều hướng
    require_once("navigation.php");
    ?>
   <?php
     require_once("footer_header/footer.php");
    ?>
    <script src="./public/lib/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./public/js/main.js"></script>
    <!-- <script src="./public/js/countdown.js"></script> -->
    <script>
        var $sliderBanner = $('.slider-list')
        $sliderBanner.owlCarousel({
            margin:10,
            loop: true,
            nav:true,
            responsive:{
                1000:{
                    items:1
                }
            }
        });
    </script>
    <script>
        function plusCart(id,donGia) {
            let string = "input[name='cart-input-"+`${id}`+ "']"
            var quantityVal = document.querySelector(string)
            let totalText = Number(document.querySelector('.text-total').innerText.replaceAll(',',''))
            totalText+= Number(donGia);
            console.log(document.querySelector('.text-total').innerText.replaceAll(',',''));
            let str = totalText + "";
            console.log(totalText);
            str = str.replace(/\B(?=(\d{3})+(?!\d))/g, ',')
            document.querySelector('.text-total').innerText = str
            var quantityInput = Number(quantityVal.value) + 1;
            $('.btn-qty-minus ').removeClass('enable-minus')
            quantityVal.value = quantityInput
            
            let urlS = '?act=cart&xuli=update&id='+`${id}`
            $.ajax({
                url:urlS,
                method: 'POST',
                // data: {qty: quantityInput, item_id: id},
                data: $("#frmid").serialize(),
                success: function(res) {
                },
            });
        }
        function minusCart(id,donGia) {
            let string = "input[name='cart-input-"+`${id}`+ "']"
            var quantityVal = document.querySelector(string)
            let totalText = Number(document.querySelector('.text-total').innerText.replaceAll(',',''))
            totalText-= Number(donGia);
            console.log(document.querySelector('.text-total').innerText.replaceAll(',',''));
            let str = totalText + "";
            console.log(totalText);
            str = str.replace(/\B(?=(\d{3})+(?!\d))/g, ',')
            document.querySelector('.text-total').innerText = str
            var quantityInput = Number(quantityVal.value) - 1;
            if(quantityInput <=1) {
                $('.btn-qty-minus ').addClass('enable-minus')
            }
            quantityVal.value = quantityInput
            let urlS = '?act=cart&xuli=delete&id='+`${id}`
            $.ajax({
                url:urlS,
                method: 'POST',
                // data: {qty: quantityInput, item_id: id},
                data: $("#frmid").serialize(),
                success: function(res) {
                },
            });
        }
    </script> 

    <script>
        var options1 = {
            width: 350,
            height: 350,
            zoomWidth: 200,
            zoomHeight: 200,
            offset: {vertical: 2, horizontal: 5}
        };
        new ImageZoom(document.getElementById("product-detail-left__thumbnail"), options1);
    </script>

    <script>

    </script>
</body>
</html>