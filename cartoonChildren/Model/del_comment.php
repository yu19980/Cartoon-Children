<?php
header("Content-type:text/html;charset=utf-8");
include_once '../Config/mysql.php';
connect();
$query = "delete from dm_msgs where id = {$_GET['id']}";
if(mysql_query($query)){
	echo '<script> alert("删除成功！");
		window.location.href = "../View/comment.php";</script>';
}else{
	echo '<script> alert("删除失败！");
		window.location.href = "../View/comment.php";</script>';
}
?>