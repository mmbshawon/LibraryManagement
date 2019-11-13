<?php include('../recruit/includes/database.php'); ?>
<?php
$message="";
if(isset($_POST["submit"])) {

$query = "SELECT * FROM subadmin WHERE sub_admin_name='" . $_POST["sub_admin_name"] . "' and password = '". $_POST["password"]. "' and status = 'active'";
$user_query = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($user_query);
$row=mysql_fetch_array($user_query);

if(is_array($row)) {

session_start();

$_SESSION["sub_admin_id"] = $row[sub_admin_id];
$_SESSION["sub_admin_name"] = $row[sub_admin_name];
$_SESSION["firstname"] = $row[firstname];
$_SESSION["lastname"] = $row[lastname];

} else {
$message = "Invalid Name or Password!";
}
if(isset($_SESSION["sub_admin_id"])) {
header("Location:index_subadmin.php");
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
        <h4>Hello SubAdmin,</h4>
        <p>This is trial version site, You can use for Login</p>
        <p class="text-success">
        <strong>User Name: <ins>subadmin</ins><br>Password: <ins>subadmin</ins></strong>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php include('../recruit/includes/subadmin_menu.php');?>
<div class="container-fluid">
   <div class="container">
            <div class="col-md-3"></div>
        	<div class="col-lg-6" id="home-page-login">

                    	<form action="" class="login-form" id="UserLoginForm" method="post">
                            <div class="login">
                                <h2>SubAdmin Login</h2>
                                <center style="color:#F00; font-size:16px; text-align:center;"><?php if($message!="") { echo $message; } ?></center>
                                <div class="form" align="center">
                                    <div class="input-group" id="login-from-searchbar">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                                        <input name="sub_admin_name" class="form-control" type="text" placeholder="User Name" required>
                                    </div>
                                    <div class="input-group" id="login-from-searchbar">
                                        <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                                        <input name="password" required class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <p><a href="#">Forgot password?</a></p>
                                    <button class="center-block" type="submit" name="submit">Sign in</button>
                                </div>
                            </div>
                        </form>
                
                


             </div>
        </div>
       </div>

<?php include ('../recruit/includes/page_footer.php');?>



