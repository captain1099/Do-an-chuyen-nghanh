<?php session_start();
	unset($_SESSION["khMa"]);
	unset($_SESSION["user"]);
	unset($_SESSION["pass"]);
	unset($_SESSION["email"]);
	unset($_SESSION["fullname"]);
	unset($_SESSION["gt"]);
	unset($_SESSION["address"]);
	unset($_SESSION["phone"]);
?>
			<script>
				window.location='login.php';
			</script>
			<?php
?>
	
 ?>