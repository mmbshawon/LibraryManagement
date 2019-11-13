<?php include('../recruit/includes/database.php'); ?>

<?php
$message="";
if(isset($_POST["submit"])) {

$query = "SELECT * FROM member WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]. "' and status = 'active'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);

if(is_array($row)) {

session_start();

$_SESSION["member_id"] = $row[member_id];
$_SESSION["firstname"] = $row[firstname];
$_SESSION["lastname"] = $row[lastname];
$_SESSION["gender"] = $row[gender];
$_SESSION["address"] = $row[address];
$_SESSION["contract"] = $row[contract];
$_SESSION["email"] = $row[email];
$_SESSION["password"] = $row[password];
$_SESSION["type"] = $row[type];
$_SESSION["level"] = $row[level];
$_SESSION["status"] = $row[status];

} else {
$message = "Invalid Email or Password!";
}
if(isset($_SESSION["member_id"])) {
header("Location:index_session.php");
exit();
}

}
?>

