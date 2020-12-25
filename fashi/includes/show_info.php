 
 <div class="container">
      <div class="row">
          <div class="col-12">
            <h2>Thông tin cá nhân</h2>
             <table border="1" style="width: 100%;">
             	<tr>
             		<td>Name</td> 
             		<td><?php echo $_SESSION["fullname"]; ?></td>
             	</tr>
             	<tr>
             		<td>User</td>
             		<td><?php echo $_SESSION["user"] ?></td>
             	</tr>
             	<tr>
             		<td>email</td>
             		<td><?php echo $_SESSION["email"] ?></td>
             	</tr>
             	<tr>
             		<td>giới tính</td>
             		<td><?php if($_SESSION["gt"]==1){ echo "Nam";} else{ echo "Nữ";} ?></td>
             	</tr>
             	<tr>
             		<td>địa chỉ</td>
             		<td><?php echo $_SESSION["address"] ?></td>
             	</tr>
             	<tr>
             		<td>Số điện thoại</td>
             		<td><?php echo $_SESSION["phone"] ?></td>
             	</tr>

             </table>
            	<a href="info.php?info=edit_info"><button  style="color:white;background:#AE4444;font-weight:bold;">Chỉnh sửa thông tin cá nhân</button></a>
             <br/><br/><br/>
          </div>
      </div>
  </div>