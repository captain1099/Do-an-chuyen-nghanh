<?php include'includes/header.php' ?>
<?php include 'includes/connect.php' ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Đăng ký</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Đăng ký</h2>
                        <?php
                        if (isset($_POST["btn_submit"])) {
                            //lấy thông tin từ các form bằng phương thức POST
                            $username = $_POST["username"];
                            $password = $_POST["pass"];
                            $fullname=$_POST["fullname"];
                            $email = $_POST["email"];
                            $gt = $_POST["gt"];
                            $address = $_POST["address"];
                            $phone = $_POST["phone"];
                            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                            if ($username == "" || $password == "" || $fullname == "" || $email == "" || $gt == null || $address == "" || $phone == "" ) {
                                echo "bạn vui lòng nhập đầy đủ thông tin";
                            }else{
                                $sql = "INSERT INTO khachhang( tendangnhap, matkhau, email, hoten, gioitinh, diachi, sodienthoai ) VALUES ( '$username', '$password', '$email', '$fullname', '$gt' , '$address' , '$phone' )";
                                // thực thi câu $sql với biến conn lấy từ file connection.php
                                $stm=$o->query($sql); 
                                
                                echo "chúc mừng bạn đã đăng ký thành công";
                            }
                        }
                        ?>
                        <form action="register.php" method="POST">
                            <div class="group-input">
                                <label for="username">Tên người dùng hoặc email *</label>
                                <input type="text" id="username" name="username">
                                <label for="pass">Mật khẩu *</label>
                                <input type="password" id="pass" name="pass">
                                <label for="hoten">Họ tên *</label>
                                <input type="text" id="fullname" name="fullname">
                                <label for="emai">Email</label>
                                <input type="text" id="email" name="email">
                            </div>
                                <div style="font-size: 18px;color: #252525;">
                                    <label for="gt">Giới tính:</label><br>
                                    <input type="radio" value="1" style="margin-left: 20px" name="gt"> Nam
                                    <input type="radio" value="0" style="margin-left: 20px" name="gt"> Nữ 
                                </div><br>
                            <div class="group-input">
                                <label for="address">Địa chỉ</label>
                                <input type="text" id="address" name="address">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <button type="submit" class="site-btn register-btn" name="btn_submit">Đăng ký</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.php" class="or-login">Hoặc đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
    <!-- Partner Logo Section Begin -->
   <!-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <?php include'includes/footer.php' ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>