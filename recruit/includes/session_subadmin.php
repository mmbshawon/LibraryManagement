<?php
session_start();

if(!isset ($_SESSION["sub_admin_id"])) {
header ('location:login_subadmin.php');
exit();
}
?>