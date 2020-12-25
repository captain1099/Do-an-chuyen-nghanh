
 <?php 
 $nam = "unchecked";
  $nu = "unchecked";
  if($_SESSION["gt"]==1)
  {
      $nam = "checked";
  }
  else{$nu = "checked";}
  
 ?>
 <div class="container">
      <div class="row">
          <div class="col-12">
            <h2>Chỉnh sửa thông tin cá nhân</h2>
            <form action="info.php?info=edit_info" method="POST">
                  <input style="width: 100%;" type="text" hidden name="khMa" value="<?php echo $_SESSION["khMa"]; ?>">
             <table border="1" style="width: 100%;">
             	<tr>
             		<td>Name</td>
             		<td><input style="width: 100%;" type="text" name="fullname" value="<?php echo $_SESSION["fullname"]; ?>"></td>
             	</tr>
             	<tr>
             		<td>User</td>
             		<td><input  style="width: 100%;" type="text"  readonly value="<?php echo $_SESSION["user"]; ?>"></td>
             	</tr>
             	<tr>
             		<td>email</td>
             		<td><input  style="width: 100%;" type="text" name="email"  value="<?php echo $_SESSION["email"] ?>"></td>
             	</tr>
             	<tr>
             		<td>giới tính</td>
             		<td><input  type="radio" value="1" name="gt" <?php echo $nam; ?> >Nam &emsp;
                              <input <?php echo $nu; ?> value="0" type="radio" name="gt" >Nữ</td>
             	</tr>
             	<tr>
             		<td>địa chỉ</td>
             		<td><input  style="width: 100%;" type="text" name="address" value="<?php echo $_SESSION["address"] ?>"></td>
             	</tr>
             	<tr>
             		<td>Số điện thoại</td>
             		<td><input  style="width: 100%;" type="text" name="sdt" value="<?php echo $_SESSION["phone"] ?>"></td>
             	</tr>

             </table>
            	<button type="submit" name="btnSua" style="color:white;background:#AE4444;font-weight:bold;">Xác nhận chính sửa</button>
            </form>
             <br/><br/><br/>
          </div>
      </div>
  </div>
  <?php
  if(isset($_POST["btnSua"]))
  {
      $khMa = $_SESSION["khMa"];
      $fullname= $_POST["fullname"];
     
      $email = $_POST["email"];
       $gt = $_POST["gt"];
       $address = $_POST["address"];
       $sdt = $_POST["sdt"];

       $sql = "UPDATE khachhang set email = '$email',hoten='$fullname',gioitinh='$gt',diachi='$address', sodienthoai='$sdt' where makhachhang = '$khMa'";

       $query=mysqli_query($conn,$sql);
        //Xóa dữ liệu cũ
                                    unset($_SESSION["fullname"]);
                                   
                                    unset($_SESSION["email"]);
                                    unset($_SESSION["gt"]);
                                    unset($_SESSION["address"]);
                                    unset($_SESSION["phone"]);
                                    
                                    
                                    //Truy cập dữ liệu mới
                                    $_SESSION["fullname"] = $fullname;
                                   
                                    $_SESSION["email"]=$email;
                                    $_SESSION["gt"]=$gt;
                                  $_SESSION["address"]=$address;
                                    $_SESSION["phone"]=$sdt;
                                                
                                                ?>
                                                <script>
                                                      window.location='info.php?info=show_info';
                                                </script>
                                                <?php
                                                exit;
                                    
  } 
  ?>