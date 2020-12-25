<?php
include '../includes/connect.php';
if (isset($_GET['xoa']))
{
	$sql = "delete from danhmuc where madanhmuc='".$_GET['xoa']."'";
                                    if ($stm = $o->query($sql)!= null)
										echo'Xoá thành công';
										else
										echo 'xoá không thành công';
}

?>