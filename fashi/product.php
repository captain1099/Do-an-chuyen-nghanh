<?php include'includes/header.php' ?>
<?php include 'includes/connect.php' ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Chi tiết sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <?php include 'includes/menu-left.php' ?>
                <div class="col-lg-9 order-1 order-lg-2">
                 <?php 
                 if(isset($_GET['masanpham']))
                 {
                    $id=$_GET['masanpham'];
                 }
                 else 
                    {$id='';}
                        $sql = "select * from sanpham where masanpham=$id";
                        $stm = $o->query($sql);
                        $data = $stm->fetchAll();
                        foreach ($data as $key => $value) {
                            ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="<?php echo $value["hinhanh"] ?>" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                           <!-- <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="imgs/case_1.png"><img
                                            src="imgs/case_1.png" alt=""></div>
                                    <div class="pt" data-imgbigurl="imgs/view-product/case1-1.png"><img
                                            src="imgs/view-product/case1-1.png" alt=""></div>
                                    <div class="pt active" data-imgbigurl="imgs/view-product/case1_2.png"><img
                                            src="imgs/view-product/case1_2.png" alt=""></div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>oranges</span>
                                    <h3><?php echo $value["tensanpham"] ?></h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p><i class="fa fa-arrow-right"></i><?php echo $value["motasanpham"] ?></p>
                                    <h4><?php echo number_format($value["gia"]) ?> VNĐ </h4>
                                </div>
                                
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                </li>
                                <!--<li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                                </li>-->
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Thông số kỹ thuật</h5>
                                                <table class="attributes">
                                                    <tbody><tr class="option-item">
                                                        <td class="op_name">Giao tiếp</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">1x USB 3.0 + 2x USB 2.0</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Chất liệu</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">Mặc hông kính cường lực 4mm; Mặt trước nhựa kết hợp bar Led RGB; Thép dày 0.5mm sơn tĩnh điện</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Mainboard</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">ATX ,M-ATX, ITX</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Fan</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">Đỉnh 2x 120mm  - Trước : 3x 120mm - Sau : 1x 120mm - Cover nguồn 2x120mm (Không kèm fan)</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Số lượng ổ đĩa hỗ trợ</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">3x HDD 3.5 ,2x SSD 2.5</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Other Supports</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">Chiều dài tối đa VGA : 280mm; Chiều cao tối đa tản CPU : 165mm</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Khối lượng</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">380 x 185 x 413 mm (Dài x Rộng x Cao)</div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Bảo hành</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">00 tháng </div></td>
                                                    </tr>
                                                    
                                                    <tr class="option-item">
                                                        <td class="op_name">Hãng sản xuất</td>
                                                        <td class="saperator">:</td>
                                                        <td><div class="wordWrap">Jetek</div></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="<?php echo $value["hinhanh"] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <!-- <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">$495.00</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">22 in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Weight</td>
                                                <td>
                                                    <div class="p-weight">1,3kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">Xxl</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Color</td>
                                                <td><span class="cs-color"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Sku</td>
                                                <td>
                                                    <div class="p-code">00012</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Comments</h4>
                                        <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-2.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="personal-rating">
                                            <h6>Your Ratind</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="leave-comment">
                                            <h4>Leave A Comment</h4>
                                            <form action="#" class="comment-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages"></textarea>
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $sql = "select * from sanpham where madanhmuc='cpu'";
                    $stm = $o->query($sql);
                    $data = $stm->fetchAll();
                    foreach ($data as $key => $value) {
                ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $value['hinhanh'] ?>" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5><?php echo $value['tensanpham'] ?></h5>
                            </a>
                            <div class="product-price">
                                <?php echo number_format($value['gia']) ?> VNĐ
                            </div>
                        </div>
                    
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->

    <!-- Partner Logo Section Begin -->
    <!--<div class="partner-logo">
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