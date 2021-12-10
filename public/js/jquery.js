$(document).ready(function(){
    console.log('hhahah');
    $('.search-box-action input[type="text"]').on("keyup input", function(){
        var inputVal= $(this).val();
        var resultDropdown= $(".search-results");
        if(inputVal.length){
            $.get("Views/backend-search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
                
            });
        }else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".search-results p", function(){
        $(this).parents(".search-box-action").find('input[type="text"]').val($(this).text());
        $(this).parent(".search-results").empty();
    });


    $(".city").change(function() {
        var id = $(".city").val();
        $.post("Models/choose_city/data.php", {id: id}, function(data) {
            $(".huyen").html(data);
        })
    })
    $(".huyen").change(function() {
        var idHuyen = $(".huyen").val();
        $.post("Models/choose_city/ward.php",{idHuyen: idHuyen},function(data) {
            $(".xa").html(data);
        })
    })
    $(".xa").change(function() {
        var idXa = $(".xa").val();
        $.post("Models/choose_city/village.php",{idXa: idXa},function(data) {
            $(".thon").html(data);
        })
    })
});

/// edit infor
$(document).ready(function(){
    
    $('.name-login input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        var result= $(".search-result");
       /// var result = $(this).siblings(".search-result");
        if(inputVal.length){
            console.log($(this).val());
            // console.log('con chim');
           // alert('da toi day');
          $.get("Views/backend-infor.php", {term: inputVal}).done(function(data){
            result.html(data);
        });
        }else{
            result.empty();
            console.log('con');
        }
    });
    $(document).on("click", ".search-result p", function(){
        $(this).parents(".name-login").find('input[type="text"]').val($(this).text());
        $(this).parent(".search-result").empty();
    });
    function ajaxFilter() {
        var listValue = JSON.parse(localStorage.getItem("listValuePrice"))
        var danhmuc = $("#danhmuc").text();
        $.ajax({
            url: "Models/get_data_price.php",
            method: "POST",
            data: {listValue: listValue, danhmuc: danhmuc},
            success: function(data) {
                $('#product-list-main').html(data)
            }
        })
    }

    $('input.toggle__input').each(function (index, value) {
        console.log($(this));
        $(this).on('click',ajaxFilter);
    })

    $(".filter__remove").on('click',ajaxFilter);

});
// filter product 
function filterProduct(action,name, danhmuc) {
    var action = action
    var danhmuc = danhmuc
    var name = name
    console.log('da click');
    $.ajax({
        url: "Models/get_data.php",
        method: 'POST',
        data: {action: action,name: name, danhmuc: danhmuc},
        success: function(data) {
            $('#product-list-main').html(data)
        }
    })
}


// SELECT * 
// FROM danhmuc, loaisanpham, sanpham
// WHERE danhmuc.MaDM = loaisanpham.MaDM and sanpham.MaLSP = loaisanpham.MaLSP
// and danhmuc.TenDM = 'Bánh kẹo'
// ORDER BY TenSP ASC