<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title alt="">Linh kiện máy tính TV store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   
<div style="color:blue;font-size:20px;width:100%;background:red"><a style=";color:yellow" href="https://github.com/captain1099/TH-lap-trinh-web-DH51700184">Download:Thực hành lập trình web</a></div>
<div style="color:blue;font-size:20px;width:100%;background:yellow"><a style=";color:black" href="https://github.com/captain1099/TH-lap-trinh-web-DH51700184">Download:Đồ án chuyên nghành</a></div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        tvstore@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +84 36.77.44.354
                    </div>
                </div>
                <div class="ht-right">
                   <?php if(!isset($_SESSION["khMa"]))
                   {
                    echo'<a href="login.php" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>';
                   }
                   else
                   {
                    echo'<a href="info.php?info=show_info" class="login-panel"><i class="fa fa-user"></i>Xin chào '.$_SESSION["fullname"].'</a>';
                    echo'<a href="logout.php" class="login-panel"><i class="fa fa-close"></i>Đăng xuất&nbsp;&nbsp;&nbsp;</a>';
                   }
                    ?>
                    
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yu' data-image="img/flag-2.png" data-imagecss="flag yu"
                                data-title="Bangladesh">Vietnam</option>
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <form action="index.php" method="POST">
                                    <input type="text" name="search" placeholder="Bạn muốn tìm gì?">
                                    <button type="submit" name="tim"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
         <!--           <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="imgs/case_1.png" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>450.000 VNĐ</p>
                                                            <h6>Case</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="imgs/case_1.png" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>450.000 VNĐ</p>
                                                            <h6>Case</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>900.000 VNĐ</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn checkout-btn">THANH TOÁN</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">900.000 VNĐ</li>
                        </ul>
                    </div>  -->
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>LINH KIỆN MÁY TÍNH</span>
                        <ul class="depart-hover">
                            <?php
                            $sql="Select * from danhmuc";
                            $stm = $o->query($sql);
                            $data = $stm->fetchAll();
                            foreach ($data as $key => $value)
                            {
                            ?>
                            <li class="<?php if($value["madanhmuc"]=='case') echo'active';?>" name="dm"><a href="danhmuc.php?madanhmuc=<?php echo $value['madanhmuc']?>"><?php echo $value["tendanhmuc"]; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>


                        
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->