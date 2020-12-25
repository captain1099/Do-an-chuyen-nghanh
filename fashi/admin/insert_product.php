<?php
include '../includes/connect.php';
if (isset($_GET['act']))
{
if ((!isset($_POST['masanpham']))||(!isset($_POST['tensanpham']))||(!isset($_POST['madanhmuc']))||(!isset($_POST['gia']))||(!isset($_POST['motasanpham']))||(!isset($_POST['manhacungcap']))||($_FILES['hinhanh']['error'])!=0)
{
echo 'Bạn chưa điền đầy đủ thông tin';
exit;
}
$masanpham = $_POST['masanpham'];
	$tensanpham = $_POST['tensanpham'];
	$madanhmuc = $_POST['madanhmuc'];
	$gia = $_POST['gia'];
	$motasanpham = $_POST['motasanpham'];
	$manhacungcap = $_POST['manhacungcap'];
	$hinhanh = "imgs/".$_FILES['hinhanh']['name'];
	
if ($_GET['act']=='sua')
{
$sql = "update sanpham set tensanpham='$tensanpham',madanhmuc='$madanhmuc',gia='$gia',motasanpha
m='$motasanpham',hinhanh='$hinhanh' where  masanpham='".$_GET['sua']."';";
					if ($stm = $o->query($sql)!=null)
						echo'cập nhật thành công';
						
					else
						echo 'cập nhật không thành công';
}
				else
				{
				$sql = "INSERT INTO sanpham(masanpham,madanhmuc,manhacungcap,tensanpham,motasanpham,gia,hinhanh) VALUES ('$masanpham','$madanhmuc','$manhacungcap','$tensanpham','$motasanpham','$gia','$hinhanh');";
                                    if ($stm = $o->query($sql)!=null)
										echo'thêm thành công';
										else
										echo 'thêm không thành công';
										}
}

	

if (isset($_GET['sua']))
{
	$sqlsp = "select * from sanpham where masanpham='".$_GET['sua']."'";
                                    $stmsp = $o->query($sqlsp);
                                    $datasp = $stmsp->fetchAll();
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
                                    <a class="left__link" href="insert_product.html">Chèn Sản Phẩm</a>
                                    <a class="left__link" href="view_product.html">Xem Sản Phẩm</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-edit.svg" alt="">Danh Mục SP<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_p_category.html">Chèn Danh Mục</a>
                                    <a class="left__link" href="view_p_category.html">Xem Danh Mục</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-book.svg" alt="">Thể Loại<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_category.html">Chèn Thể Loại</a>
                                    <a class="left__link" href="view_category.html">Xem Thể Loại</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-settings.svg" alt="">Slide<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_slide.html">Chèn Slide</a>
                                    <a class="left__link" href="view_slides.html">Xem Slide</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-book.svg" alt="">Coupons<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_coupon.html">Chèn Coupon</a>
                                    <a class="left__link" href="view_coupons.html">Xem Coupons</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="view_customers.html" class="left__title"><img src="assets/icon-users.svg" alt="">Khách Hàng</a>
                            </li>
                            <li class="left__menuItem">
                                <a href="view_orders.html" class="left__title"><img src="assets/icon-book.svg" alt="">Đơn Đặt Hàng</a>
                            </li>
                            <li class="left__menuItem">
                                <a href="edit_css.html" class="left__title"><img src="assets/icon-pencil.svg" alt="">Chỉnh CSS</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-user.svg" alt="">Admin<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_admin.html">Chèn Admin</a>
                                    <a class="left__link" href="view_admins.html">Xem Admins</a>
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
                            <form action="insert_product.php?act=<?php echo isset($_GET['sua'])?"sua":"them"?>" method="post" enctype="multipart/form-data">
                                <div class="right__inputWrapper">
                                    <label for="title">Tên sản phẩm</label>
                                    <input type="text" value="<?php echo isset($datasp[0]['tensanpham'])?$datasp[0]['tensanpham']:""?>"name="tensanpham" placeholder="Tên sản phẩm">
                                </div>
								<div class="right__inputWrapper">
                                    <label for="title">Mã sản phẩm</label>
                                    <input type="text" value="<?php echo isset($datasp[0]['masanpham'])?$datasp[0]['masanpham']:""?>" name="masanpham" placeholder="Tên sản phẩm" <?php echo isset($_GET['sua'])?'readonly style="color:red"':""?>>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="p_category">Danh mục</label>
                                    <select name="madanhmuc">
                                      <!--  <option disabled selected>Chọn danh mục</option>-->
										<?php $sql = "select * from danhmuc";
										if (isset($datasp[0]['madanhmuc']))
										$sql=$sql." where madanhmuc='".$datasp[0]['madanhmuc']."'";
                                    $stm = $o->query($sql);
                                    $data = $stm->fetchAll();
foreach ($data as $key => $value)
{?>
                                        <option value="<?php echo $value['madanhmuc']?>"><?php echo $value['tendanhmuc']?></option>
<?php }?>
                                    </select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh 1</label>
                                    <input type="file" name="hinhanh">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Giá sản phẩm</label>
                                    <input name="gia" type="number" placeholder="Giá sản phẩm" value="<?php echo isset($datasp[0]['gia'])?$datasp[0]['gia']:""?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Mã nhà cung cấp</label>
									<select name="manhacungcap">
                                         <!--<option disabled selected>Chọn nhà cung cấp</option>-->
									<?php $sql = "select * from nhacungcap";
                                    $stm = $o->query($sql);
                                    $data1 = $stm->fetchAll();
foreach ($data1 as $key => $value)
{?>
                                    <option value="<?php echo $value['manhacungcap']?>"><?php echo $value['tennhacungcap']?></option>
<?php }?>
</select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="motasanpham" id="" cols="30" rows="10" placeholder="Mô tả" ><?php echo isset($datasp[0]['motasanpham'])?$datasp[0]['motasanpham']:""?></textarea>
                                </div>
                                <button class="btn" type="submit"><?php echo isset($_GET['sua'])?"Cập nhật":"Chèn"?></button>
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