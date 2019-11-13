<?php
session_start();

if(!isset ($_SESSION["member_id"])) {
header ('location:../public/index.php');
exit();
}
?>