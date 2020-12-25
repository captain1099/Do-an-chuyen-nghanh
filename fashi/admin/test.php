<?php
	define('DB_SERVER','localhost');
	define('DB_USER','id15078587_linhkienmaytinh');
	define('DB_PASS' ,'aFbtfF6p(?Ind86]');
	define('DB_NAME','id15078587_linhkienmay');
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if(mysqli_connect_errno())
	{
		echo "false";
	}
if(isset($_POST['submit']))
    {
	$maloai=isset($_POST['ml'])?$_POST['ml']:'';
	$nhasx=isset($_POST['nsx'])?$_POST['nsx']:'';
	$mansx=isset($_POST['mnsx'])?$_POST['mnsx']:'';
	


	$sql=mysqli_query($con,"INSERT INTO loaisp (maloai, nhasx, mansx) VALUES ('$maloai', '$nhasx', '$mansx')");
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
								<form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã loại</label>
                                    <input type="text" name="ml" placeholder="Tiêu đề">
                                </div>
								<div class="right__inputWrapper">
                                    <label for="title">Nhà sản xuất</label>
                                    <input type="text" name="nsx" placeholder="Tiêu đề">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Mã nhà SX</label>
                                    <input type="text" name="mnsx" placeholder="Tiêu đề">
                                </div>
                                <button class="btn" type="submit">Chèn</button>
                            </form>
							
							</body>
</html>