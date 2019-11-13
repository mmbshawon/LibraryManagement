<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php 
	$id=$_GET['id'];
	mysql_query("delete from subadmin where sub_admin_id='$id'") or die(mysql_error());
	header('location: subadmin_all.php');
?>