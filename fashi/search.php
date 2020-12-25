<?php include 'includes/connect.php' ?>
<?php session_start() ?>
<?php include 'includes/header.php'?> 

    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                           
                                <?php
                                    $sql = "select * from sanpham";
                                    $stm = $o->query($sql);
                                    $data = $stm->fetchAll();
                                    foreach ($data as $key => $value) {
                                       echo ' <div class="col-lg-3 col-sm-6"> 
                                       <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="'.$value["hinhanh"].'" alt="" width="150" height="250">
                                        <div class="sale pp-sale">Sale</div>
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
                                        <a href="product.html">
                                            <h5>'.$value["tensanpham"].'</h5>
                                        </a>
                                        <div class="product-price">
                                            '.$value["gia"].'
                                            <span>'.$value["gia"].'</span>
                                        </div>
                                    </div>
                                </div>  
                                </div>';
                                     } 
                                 ?>
                                
                          
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
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