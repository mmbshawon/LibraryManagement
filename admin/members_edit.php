<?php include ('../recruit/includes/session_admin.php');?>
<?php include ('../recruit/includes/database.php');?>

<?php 
	if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$gender = ($_POST['gender']);
	$address = ($_POST['address']);
	$contract = ($_POST['contract']);
	$email = ($_POST['email']);
	$type = ($_POST['type']);
	$level = ($_POST['level']);
	$status = ($_POST['status']);
	
	mysql_query("update member	set	firstname = '$firstname',lastname = '$lastname',gender = '$gender',address = '$address',contract = '$contract',email = '$email',type = '$type',level = '$level',status = '$status'	where member_id='$id'")or die(mysql_error());
									
	header('location: members_all.php');
	}
?>	

<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="subadmin-page-body">
            <br>

<?php $get_id = $_GET['id']; ?>
<?php 
	$query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
	$row=mysql_fetch_array($query);
?>

            <form class="well form-horizontal" method="post" action="members_edit.php">
            		<fieldset>
            				<legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:10px;">Edit Member Details</legend>

                  	<div class="form-group">
                        <label class="col-md-4 control-label">First Name</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="firstname" class="form-control"  type="text" value="<?php echo $row['firstname']?>" required />
                                <input class="form-control" type="hidden" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required />
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
                                <select name="gender" class="form-control selectpicker" required />
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
                        <label class="col-md-4 control-label">Type</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="type" class="form-control selectpicker" required>
                                  <option><?php echo $row['type']?></option>
                                  <option>Student</option>
                                  <option>Teacher</option>
                                  <option>Member</option>
                                  <option>Staff</option>
                                </select>
                            </div>
                        </div>
                    </div>                   
                   
                    <div class="form-group"> 
                        <label class="col-md-4 control-label">Level</label>
                          <div class="col-md-4 selectContainer">
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                  <select name="level" class="form-control selectpicker" required >
                                    <option><?php echo $row['level']?></option>
                                    <option>First Year</option>
                                    <option>Second year</option>
                                    <option>Third Year</option>
                                    <option>Final Year</option>
                                    <option>Sr Teacher</option>
                                    <option>Jr Teacher</option>
                                    <option>In Door</option>
                                    <option>Out Door</option>
                                    <option>Others</option>
                              </select>
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
                            <a href="members_all.php" class="btn btn-danger" role="button">Cancel&nbsp;<i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            <button type="reset" class="btn btn-warning" >Reset&nbsp;<i class="fa fa-refresh" aria-hidden="true"></i></button>
                            <button type="submit" name="submit" class="btn btn-success" >Update&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php include ('../recruit/includes/page_footer.php');?>



