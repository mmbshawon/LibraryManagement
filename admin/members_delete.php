<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php 
	$id=$_GET['id'];
	mysql_query("delete from member where member_id='$id'") or die(mysql_error());
	header('location: members_all.php');
?>