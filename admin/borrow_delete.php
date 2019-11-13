<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php 
	$id=$_GET['id'];
	mysql_query("DELETE FROM borrowdetails where borrow_id=$id") or die(mysql_error());
	mysql_query("delete from borrow where borrow_id='$id'") or die(mysql_error());
	mysql_query("delete from requestdetails where request_details_id='$id'") or die(mysql_error());

	header('location: borrow_view.php');
?>



