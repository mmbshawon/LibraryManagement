<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php 

	$id=$_GET['id'];
	mysql_query("delete from admin where admin_id='$id'") or die(mysql_error());
	header('location: admin_all.php');
?>