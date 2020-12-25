<?php
include 'includes/connect.php';
session_start();
   ?>
    <?php
    if(!isset($_SESSION["giohang"]))
    {
    $_SESSION["giohang"]=array();
    }
    $error=false;
    $success=false;
    if(isset($_GET['action']))
    {
    function update_giohang($add=false)
    {
      foreach ($_POST['quantity'] as $maxe=>$quantity) 
        
      {

        if($quantity <='0' )
          {
            unset($_SESSION["giohang"][$maxe]);

          }else{
            if($add)
            {
              $_SESSION["giohang"][$maxe] +=$quantity;
            }
            else
            {
              $_SESSION["giohang"][$maxe]=$quantity;
            }
        }
      }
    }
    switch ($_GET['action'])
    {
    case "add":
    update_giohang(true);
    header('location: ./giohang.php');
    break;
    case "delete":
   // echo 'hhhh';exit;
    if (isset($_GET['id'])) {
    unset($_SESSION["giohang"][$_GET['id']]);
    }
    header('location: ./giohang.php');
    break;
    case "submit":
    if(isset($_POST['update']))
    {
    update_giohang();
    header('location: ./giohang.php');
    }
    else if($_POST['order'])
      {
        if(empty($_POST['name']))
          {
            $error="Bạn chưa nhập TÊN NGƯỜI NHẬN !!!!!";
          }
            else if(empty($_POST['phone']))
              {
                $error="Bạn chưa nhập SỐ ĐIỆN THOẠI người nhận !!!";
              }
                else if(empty($_POST['address']))
                {
                  $error="Bạn chưa nhập ĐỊA CHỈ người nhận !!!!!!";
                }
                  else if(empty($_POST['quantity'])) 
                  {
                    $error="Giỏ hàng rỗng.";
                 }
        if($error == false && !empty($_POST['quantity']))
          {
            $sql="SELECT * FROM `xe` WHERE `maxe` IN (".implode(",", array_keys($_POST['quantity'])).")";
            $stm=$o->query($sql);
            $data=$stm->fetchAll();
            $money=0;
            $dathangsanpham= array();
            foreach ($data as $value)
            {
              $dathangsanpham[]=$value;

              $money +=  $value['gia'] * $_POST['quantity'][$value['maxe']];
          //var_dump($money);exit;
            }
              $sql="INSERT INTO `donhang` (`madh`, `tenkh`, `sdt`, `diachi`, `tongtien`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', '".$money."'); ";
              $stm=$o->query($sql);
              $data=$stm->fetchAll();
              $giohangmadh=$o->lastInsertId();
              $insertString="";
              
              foreach ($dathangsanpham as $key => $value) {
                
                $insertString .="(NULL, '".$giohangmadh."', '".$value['maxe']."', '".$_POST['quantity'][$value['maxe']]."', '".$value['gia']."')";
                if($key !=count($dathangsanpham) - 1){
                  $insertString.=",";
                }
              }
              $sql="INSERT INTO `chitietdonhang` (`id`, `madh`, `maxe`, `soluong`, `gia`) VALUES ".$insertString." ";
              $stm=$o->query($sql);
              $data=$stm->fetchAll();
              $success="Đặt hàng thành công !";
              unset($_SESSION["giohang"]);
            }
      }
    break;
    }
    }
    if(!empty($_SESSION["giohang"])){
    
    $sql="SELECT * FROM `xe` WHERE `maxe` IN (".implode(",", array_keys($_SESSION["giohang"])).")";
    $stm=$o->query($sql);
    $data=$stm->fetchAll();
    }
    header ('location:shopping-cart.php');
    ?>
    