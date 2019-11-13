<?php include ('../recruit/includes/session_admin.php');?>
<?php include ('../recruit/includes/database.php');?>

<?php 
	if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$admin_name = ($_POST['admin_name']);
	$password = ($_POST['password']);
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$gender = ($_POST['gender']);
	$address = ($_POST['address']);
	$contract = ($_POST['contract']);
	$email = ($_POST['email']);
	$status = ($_POST['status']);
	
	mysql_query("update admin set admin_name = '$admin_name',password = '$password', firstname = '$firstname',lastname = '$lastname',gender = '$gender',address = '$address',contract = '$contract',email = '$email',status = '$status'	where admin_id='$id'")or die(mysql_error());

	header('location: admin_all.php');
	}
?>	

<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>

<?php $get_id = $_GET['id']; ?>
<?php 
	$query=mysql_query("select * from admin where admin_id='$get_id'")or die(mysql_error());
	$row=mysql_fetch_array($query);

?>

<div class="container">
    <div class="row">
		    <div class="col-md-12" id="admin-page-body">		
            <br>
            <form role="form" class="well form-horizontal" method="post" action="admin_edit.php">
				        <fieldset>
				            <legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:10px;">Edit Admin Details</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Admin Name</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="admin_name" class="form-control"  type="text" value="<?php echo $row['admin_name']?>" required />
                                <input class="form-control" type="hidden" name="id" value="<?php echo $get_id;  ?>" placeholder="Admin Name" required />
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="password" class="form-control"  type="password" value="<?php echo $row['password']?>" required />
                            </div>
                        </div>
                    </div>

                  	<div class="form-group">
                        <label class="col-md-4 control-label">First Name</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input  name="firstname" class="form-control"  type="text" value="<?php echo $row['firstname']?>" required />
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-md-4 control-label" >Last Name</label> 
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="lastname" class="form-control"  type="text" value="<?php echo $row['lastname']?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="gender" class="form-control selectpicker" required>
                                    <option><?php echo $row['gender']?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>                   

                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="address" class="form-control" type="text" value="<?php echo $row['address']?>" required>
                            </div>
                        </div>
                    </div>                

                    <div class="form-group">
                        <label class="col-md-4 control-label">Contract #</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="contract" class="form-control" type="text" value="<?php echo $row['contract']?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" class="form-control"  type="email" value="<?php echo $row['email']?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="status" class="form-control selectpicker" >
                                    <option><?php echo $row['status']?></option>
                                    <option required>Active</option>
                                    <option required>Banned</option>
                                </select>
                            </div>
                        </div>
                    </div>                   

                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <a href="admin_all.php" class="btn btn-danger" role="button">Cancel&nbsp;<i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            <button type="reset" class="btn btn-warning" >Reset&nbsp;<i class="fa fa-refresh" aria-hidden="true"></i></button>
                            <button type="submit" name="submit" class="btn btn-success" >Submit&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </fieldset>
            </form>
         </div>		
		</div>
</div>

<?php include ('../recruit/includes/page_footer.php');?>




