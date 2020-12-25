<?php 
                    $sql = "select * from sanpham where masanpham='$_GET[id_detail]'";
                    $stm = $o->query($sql);
                    $data = $stm->fetchAll();
                    ?>
                    <div class="row">di
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="imgs/<?php echo $data['hinhanh'] ?>" alt="">
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
                                <h5><?php echo $data['tensanpham'] ?></h5>
                            </a>
                            <div class="product-price">
                                <?php echo $data['gia'] ?> VNĐ
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
               