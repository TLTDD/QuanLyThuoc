
      
        <section id ="main">
            <div class="container ">
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
                                <span>Thông tin cá nhân</span>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="container-infor">
                  <?php if(isset($data)) {    
                      ?>
                        <label class="container-infor__title">Thông Tin Tài Khoản</label>
                        <h2 class ="container-infor__name">Khách hàng: <span><?= $data['Ho']. " ".$data['Ten'] ?></span></h2>
                        <input checked="true" class= "infoChange-type" type="radio" name="radio-changeInfor" id="radio-changeInfor"><span>Thông tin cá nhân </span>
                        <div class="div"></div>
                        <form  action="?act=taikhoan&xuli=updateinfo" class="container-inforChange  container-inforp" method="POST">
                        
                            <fieldset class="container-infor__item name-login">
                                <label>Tên Đăng nhập</label>
                                <span class="required">*</span>
                                <input id="nameLogin" name = "TaiKhoan" type="text" value="<?= $data['TaiKhoan']?>" class="form-control form-control-lg edit  " placeholder=""/>
                                <div class="search-result"></div>
                            </fieldset>
                            </fieldset>
                            <fieldset class="container-infor__item">
                                <label>Họ </label>
                                <span class="required">*</span>
                                <input type="text" name ="Ho" value ="<?= $data['Ho'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                            </fieldset>
                            <fieldset class="container-infor__item">
                                <label>Tên </label>
                                <span class="required">*</span>
                                <input type="text" name ="Ten" value ="<?= $data['Ten'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                            </fieldset>
        
                            <fieldset class="container-infor__item">
                                <label>Số điện thoại </label>
                                <span class="required">*</span>
                                <input type="tel" name ="SDT" value="<?= $data['SDT']?>" class="form-control form-control-lg edit" placeholder=""/>
                            </fieldset>
                            <fieldset class="container-infor__item">
                                <label>Email </label>
                                <span class="required">*</span>
                                <input type="email" name ="Email" value="<?= $data['Email']?>" class="form-control form-control-lg edit" placeholder=""/>
                            </fieldset>
                            <fieldset class="container-infor__item">
                                <label>Địa chỉ </label>
                                <span class="required">*</span>
                                <input type="text" name = "DiaChi" value="<?= $data['DiaChi']?>" class="form-control form-control-lg edit" placeholder=""/>
                            </fieldset>
                        
                        <div class="container-infor__item">
                            <input class="btn-edit" type="submit" value="Cập Nhật">
                        </div>
                    </form>
                        <!-- Đổi mật khẩu -->
                        
                        <input class= "infoChange-type" type="radio" name="radio-changeInfor" id="radio-changePass"  <?php if (isset($_COOKIE['doimk'])) { echo 'checked="true"';}?>><span> Đổi mật khẩu </span>
                        <div class="div"></div>
                        <?php if (isset($_COOKIE['doimk'])) { ?>
                                    <div class="alert alert-success">
                                        <strong>Thông báo</strong> <?= $_COOKIE['doimk'] ?>
                                    </div>
                                    <?php }?>
                        <form action="?act=taikhoan&xuli=updateinfo" class="container-inforChange container-pass" method="POST">
                                 <fieldset class="container-infor__item">
                                    <label>Mật khẩu củ</label>
                                  
                                    <input type="password" name="MatKhau" class="form-control form-control-lg edit" placeholder="Password" required/>
                                </fieldset>
                                <fieldset class="container-infor__item">
                                    <label>Mật khẩu mới</label>
                                   
                                    <input type="password" name="MatKhauMoi" class="form-control form-control-lg edit" placeholder="Password"/>
                                </fieldset>
                                <fieldset class="container-infor__item">
                                    <label>Nhập lại mật khẩu</label>
                                    
                                    <input type="password" name="MatKhauXN" class="form-control form-control-lg edit" placeholder="Password"/>
                                </fieldset>
                                <div class="container-infor__item">
                                     <input class="btn-edit" type="submit" value="Cập Nhật">
                                </div>
                        </form>
                        
                    
                  <?php } 
                  else {
                      echo "khong lay dc ";
                    }
                  ?>
                </div>
               
            </div>
        </section>
    <script>
        document.ready(function(){
     $('#nameLogin input[type="text"]').on("keyup input", function(){
        alert("abcjakd");
        console.log("ngu ngo");
    })
})
    </script>
