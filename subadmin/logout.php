<?php include ('../recruit/includes/session_subadmin.php');?>

<?php
unset($_SESSION["sub_admin_id"]);
unset($_SESSION["sub_admin_name"]);
header("Location:login_subadmin.php");
session_destroy();
exit();
?>
