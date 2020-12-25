<?php session_start(); ?>
<?php include 'includes/connect.php' ?>

<?php include 'includes/header.php'?> 

<!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/banner1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/banner2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/banner3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <?php include 'includes/menu-left.php' ?>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                           
                                <?php
                                    $sql = "select * from sanpham";
                                    $t="'";
                                    if(isset($_POST['tim']))
                                    {
                                        $name=$_POST['search'];
                                         $num=$stm->rowCount();
                                         if($num==0)
                                         {
                                         }
                                         else{
                                        $sql = "select * from sanpham where tensanpham LIKE '%$name%'";
                                        $stm=$o->query($sql);
                                    }
                                    }
                                    else if(isset($_POST['loc']))
                                    {
                                        $name=$_POST['hsx'];
                                        $sql = "select * from sanpham where manhacungcap = '$name'";

                                    }
                                    
                                    $stm = $o->query($sql);
                                    $data = $stm->fetchAll();
                                    $num=$stm->rowCount();
                                    foreach ($data as $key => $value) 

                                        {
                                        ?>
                                        
                                       <div class="col-lg-4 col-sm-6"> 
                                       <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="<?php echo $value["hinhanh"]?>" alt="" width="150" height="250">
                                        <?php if($value['masanpham']==1 || $value['masanpham']%4==0) echo '<div class="sale pp-sale">Sale</div>'?>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="test_cart.php?masanpham=<?php echo $value['masanpham']?>"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="product.php?masanpham=<?php echo $value['masanpham']?>">Chi tiết</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Towel</div>
                                        <a href="product.php?masanpham=<?php echo $value["masanpham"]?>">
                                            <h5><?php echo $value["tensanpham"]?></h5>
                                        <h5><?php echo $value['manhacungcap'];?></h5>

                                        </a>
                                        <div class="product-price">
                                            <?php echo number_format($value["gia"])?> VNĐ
                                        </div>
                                    </div>
                                </div>  
                                </div><?php
                                     } 
                                 ?>
                                
                          
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="imgs/vga.webp">
                        <h2>VGA CARD</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        
                             <?php
                                    $sql = "select * from sanpham where madanhmuc='case'";
                                    $stm = $o->query($sql);
                                    $data = $stm->fetchAll();
                                    foreach ($data as $key => $value)
                                     {
                                    ?>
                                     <div class="product-item">
                                        <div class="pi-pic">
                                        <img src="<?php echo $value["hinhanh"]?>" alt="" width="150" height="250">
                                        <?php if($value['masanpham']==1 || $value['masanpham']%2==0) echo '<div class="sale">Sale</div>'?>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="product.php?masanpham=<?php echo $value['masanpham']?>">+ Chi tiết</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Coat</div>
                                        <a href="product.php?masanpham=<?php echo $value['masanpham']?>">
                                            <h5><?php echo $value["tensanpham"]?></h5>
                                        </a>
                                        <div class="product-price">
                                            <?php echo $value["gia"]?>
                                            <span> <?php echo $value["gia"]?></span>
                                        </div>
                            </div> </div>
                                   <?php }?>
                           
                        
                        <!--<div class="product-item">
                            <div class="pi-pic">
                                <img src="imgs/vga_6.jpg" alt="">
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
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="imgs/vga_7.png" alt="">
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
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="imgs/vga_8.png" alt="">
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
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="imgs/end_ct2.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2 style="color: white;">Deal Of The Week</h2>
                    <p style="color:white;font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                        consectetur adipisicing elit </p>
                    <div class="product-price">
                        $35.00
                        <span style="font-weight: bold">/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="imgs/story/1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item2 set-bg" data-setbg="imgs/story/2.jpg" >
        </div>
        <div class="insta-item set-bg" data-setbg="imgs/story/3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    

    <!-- Footer Section Begin -->
    <?php include 'includes/footer.php' ?>
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