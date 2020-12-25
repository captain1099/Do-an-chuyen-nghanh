<?php
include '../includes/connect.php';
if (isset($_GET['xoa']))
{
	$sql = "delete from dangnhap where tendn='".$_GET['xoa']."'";
                                    if ($stm = $o->query($sql)!= null)
										{
										echo'Xoá thành công';
										header('location: view_admins.php');
										}
										else
										{
										echo 'xoá không thành công';
										header('location: view_admins.php');
										}
}

?>