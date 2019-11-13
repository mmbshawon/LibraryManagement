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
header("Location:../user/index_user.php");
exit();
}

}
?>

<?php include ('../recruit/includes/page_header.php');?>


<div class="modal fade" tabindex="-1" role="dialog" id="WarningForTrial">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-danger">Helpful Information...</h4>
      </div>
      <div class="modal-body text-primary">
        <h4>Hello User,</h4>
        <p>This is trial version site, You can use for Login</p>
        <p class="text-success">
        <strong>User email: <ins>user@gmail.com</ins><br>Password: <ins>user</ins></strong>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php include ('../recruit/includes/public_menu.php');?>
<?php include ('breaking.php');?>
<?php include ('slider.php');?>
<?php include ('thumbanil.php');?>
<?php include ('homebody.php');?>
<?php include('../recruit/includes/page_footer.php');?>