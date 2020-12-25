<?php
include '../includes/connect.php';
if (isset($_GET['act']))
{
	$madanhmuc = $_POST['madanhmuc'];
	$tendanhmuc = $_POST['tendanhmuc'];
	
	$sql = "INSERT INTO danhmuc(madanhmuc,tendanhmuc) VALUES ('$madanhmuc','$tendanhmuc');";
                                    if ($stm = $o->query($sql)!=null)
										echo'thêm thành công';
										else
										echo 'thêm không thành công';
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
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn danh mục</p>
                        <div class="right__formWrapper">
                            <form action="insert_cate.php?act=do" method="post" enctype="multipart/form-data">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã Danh Mục</label>
                                    <input type="text" name="madanhmuc" placeholder="Mã Danh Mục">
                                </div>
								<div class="right__inputWrapper">
                                    <label for="title">Tên Danh Mục</label>
                                    <input type="text" name="tendanhmuc" placeholder="Tên Danh Mục">
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