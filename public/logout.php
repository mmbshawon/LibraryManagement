<?php include ('../recruit/includes/session_user.php');?>
<?php
unset($_SESSION["member_id"]);
unset($_SESSION["member_name"]);
header("Location:../public/index.php");
session_destroy();
exit();
?>
