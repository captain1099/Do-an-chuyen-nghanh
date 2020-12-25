<?php include'includes/header.php' ?>
<?php 
$product=!empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--$masanpham=!empty($_GET['masanpham']) ? (Int)$_GET['masanpham'] : 0;
                                $quantity=!empty($_GET['quantity']) ? (Int)$_GET['quantity'] : 1;
                                $action=!empty($_GET['action']) ? (Int)$_GET['action'] : 'add';
                                $query=$o->query("Select * from sanpham where masanpham=$masanpham");
                                $pro=$query->fetch_object();
                                    //thêm
                                if($pro && $action == 'add')
                                {
                                    if(isset($_SESSION['cart'][$masanpham]))
                                    {
                                        $_SESSION['cart'][$id]['quantity']+=$quantity;
                                    }
                                    else
                                    {
                                        $item = [
                                        'masanpham'=>$pro->hinhanh,
                                        'tensanpham'=>$pro->tensanpham,
                                        'gia'=>$pro->gia,
                                        'soluong'=>$quantity
                                    ];
                                        $_SESSION['cart'][$masanpham]=$item;
                                    }

                                }
                                echo '<pre>';
                                print_r($_SESSION['cart']); -->
                                <?php
                                foreach ($product as $item=>$value) 
                                {
                                    print_r($value);
                                ?>
                                <tr>
                                    <td class="cart-pic first-row"><img src="<?php echo $value["hinhanh"] ?>" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $value["tensanpham"] ?></h5>
                                    </td>
                                    <td class="p-price first-row"><?php echo $value["gia"] ?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">490.000 VNĐ</td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>
                                <?php
                                }
                                ?>
                               <!-- <tr>
                                    <td class="cart-pic"><img src="imgs/power_4.png" alt=""></td>
                                    <td class="cart-title">
                                        <h5>NGUỒN ASUS ROG STRIX 850W GOLD</h5>
                                    </td>
                                    <td class="p-price">4.200.000 VNĐ</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">4.200.000 VNĐ</td>
                                    <td class="close-td"><i class="ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic"><img src="imgs/vga_6.jpg" alt=""></td>
                                    <td class="cart-title">
                                        <h5>VGA Gigabyte GV-N3090AORUS X-24GD</h5>
                                    </td>
                                    <td class="p-price">51.250.000 VNĐ</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">51.250.000 VNĐ</td>
                                    <td class="close-td"><i class="ti-close"></i></td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Tiếp tục mua hàng</a>
                                <a href="#" class="primary-btn up-cart">Cập nhật giỏ hàng</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Mã khuyến mãi</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Nhập mã tại đây">
                                    <button type="submit" class="site-btn coupon-btn">Áp dụng</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Tổng tiền <span>0 VNĐ</span></li>
                                    <li class="cart-total">Tổng thanh toán <span>0 VNĐ</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">Tiến hành đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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
    </div> -->
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