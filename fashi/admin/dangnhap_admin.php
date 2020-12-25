<?php include_once"database.php";
if(isset($_GET["action"]))
{
		$sql="select * from dangnhap where tendn ";
		$username   = addslashes($_POST['tendn']);
		$password   = addslashes($_POST['pass']);
		$password = md5($password);
		$query = mysqli_query($conn,"SELECT tendn, pass FROM dangnhap WHERE tendn='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['tendn'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='view_product.php'>Về admin</a>";
    die();
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
                      
                    </div>
                </div>
                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Đăng Nhập</div>
                        <p class="right__desc">Chèn admin</p>
                        <div class="right__formWrapper">
                            <form action="dangnhap_admin.php?action=do" method="POST">
                                <div class="right__inputWrapper">
                                    <label for="name">Tên Đăng Nhập</label>
                                    <input type="text" name="tendn" placeholder="Tên admin">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" name="pass" placeholder="Mật khẩu">
                                </div>
                                <button class="btn" type="submit">Chèn</button>
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