<?php include_once"database.php";
if(isset($_GET["action"]))
{
		$sql="select * from dangnhap where tendn ";
		$username   = addslashes($_POST['tendn']);
		$password   = addslashes($_POST['pass']);
		$email      = addslashes($_POST['email']);
		$fullname   = addslashes($_POST['hoten']);
		$password = md5($password);
		if (mysqli_num_rows(mysqli_query($conn,"SELECT tendn FROM dangnhap WHERE tendn='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	else
	{
		@$addmember = mysqli_query($conn,"
        INSERT INTO dangnhap (
            tendn,
            pass,
            email,
            hoten
			
           
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}'
            
        )
    ");
	
	 if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='dangki_admin.php'>Về admin </a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
	}
		
		 
		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__logo">LOGO</div>
                        <div class="left__profile">
                            <div class="left__image"><img src="assets/profile.jpg" alt=""></div>
                            <p class="left__name">Hatsune Miku</p>
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="index.html" class="left__title"><img src="assets/icon-dashboard.svg" alt="">Dashboard</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-tag.svg" alt="">Sản Phẩm<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_product.php">Chèn Sản Phẩm</a>
                                    <a class="left__link" href="view_product.php">Xem Sản Phẩm</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-edit.svg" alt="">Danh Mục SP<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_cate.php">Chèn Danh Mục</a>
                                    <a class="left__link" href="view_cate.php">Xem Danh Mục</a>
                                </div>
                            </li>
                            
                            
                            
                            <li class="left__menuItem">
                                <a href="view_customers.html" class="left__title"><img src="assets/icon-users.svg" alt="">Khách Hàng</a>
                            </li>
                            <li class="left__menuItem">
                                <a href="view_orders.html" class="left__title"><img src="assets/icon-book.svg" alt="">Đơn Đặt Hàng</a>
                            </li>
                            
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-user.svg" alt="">Admin<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="dangki_admin.php">Chèn Admin</a>
                                    <a class="left__link" href="view_admins.php">Xem Admins</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="" class="left__title"><img src="assets/icon-logout.svg" alt="">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Đăng Kí</div>
                        <p class="right__desc">Chèn admin</p>
                        <div class="right__formWrapper">
                            <form action="dangki_admin.php?action=do" method="POST">
                                <div class="right__inputWrapper">
                                    <label for="name">Tên admin</label>
                                    <input type="text" name="tendn" placeholder="Tên admin">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" name="pass" placeholder="Mật khẩu">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="text">Họ và Tên</label>
                                    <input type="text" name="hoten" placeholder="Họ Tên">
                                </div>
                                <button class="btn" type="submit">Chèn</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>