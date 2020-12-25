<?php include '../includes/connect.php'; ?>
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
                        <p class="right__desc">Xem sản phẩm</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><a href="?by=masanpham">Mã Sản Phẩm</a></th>
                                            <th><a href="?by=tensanpham">Tên sản phẩm</a></th>
                                            <th>Hình ảnh</th>
                                            <th><a href="?by=gia">Giá SP</th></a>
                                            <th><a href="?by=madanhmuc">Mã danh mục</a></th>
                                            <th><a href="?by=manhacungcap">Mã nhà cung cấp</a></th>
                                            <th>Mô tả</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>                          
                                    <tbody>
									<?php $sql = "select * from sanpham";
									if (isset($_GET['by']))
									$sql.=" order by ".$_GET['by']." asc";
                                    $stm = $o->query($sql);
                                    $data = $stm->fetchAll();
foreach ($data as $key => $value)
{?>
                                        <tr>
                                            <td data-label="STT"><?php echo $value['masanpham']?></td>
                                            <td data-label="Tên sản phẩm"><?php echo $value['tensanpham']?></td>
                                            <td data-label="Hình ảnh"><img src="../<?php echo $value["hinhanh"]?>" alt=""></td>
                                            <td data-label="Giá SP"><?php echo $value['gia']?> ₫</td>
                                            <td data-label="Đã bán"><?php echo $value['madanhmuc']?></td>
                                            <td data-label="Từ khoá"><?php echo $value['manhacungcap']?></td>
                                            <td data-label="Thời gian"><?php echo $value['motasanpham']?></td>
                                            <td data-label="Sửa" class="right__iconTable"><a href="insert_product.php?sua=<?php echo $value['masanpham']?>"><img src="assets/icon-edit.svg" alt=""></a></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="delete_product.php?xoa=<?php echo $value['masanpham']?>"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr>
<?php }?>  
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