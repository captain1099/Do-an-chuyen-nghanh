<?php
include '../includes/connect.php';
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
                                    <a class="left__link" href="insert_admin.php">Chèn Admin</a>
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
                        <p class="right__desc">Xem admins</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Họ và Tên</th>
                                            <th>Email</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        <?php 
                                        $sql = "select * from dangnhap";
                                        $stm = $o->query($sql);
                                        $data = $stm->fetchAll();
                                        $i=0;
                                        foreach ($data as $key => $value)
                                        {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td data-label="STT"><?php echo $i?></td>
                                            <td data-label="Tên"><?php echo $value['tendn']?></td>
                                            <td data-label="Họ và Tên"><?php echo $value['hoten']?></td>
                                            <td data-label="Email"><?php echo $value['email']?></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="delete_admin.php?xoa=<?php echo $value['tendn']?>"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr>
                                        <?php }
                                      
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>