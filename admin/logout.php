<?php include ('../recruit/includes/session_admin.php');?>
<?php
	unset($_SESSION["admin_id"]);
	unset($_SESSION["admin_name"]);
	header("Location:login_admin.php");
	session_destroy();
	exit();
?>
