<?php include ('../recruit/includes/session_admin.php');?>
<?php include ('../recruit/includes/database.php');?>

<?php
  if(isset($_POST['submit'])){
  $admin_name = ($_POST['admin_name']);
  $password = ($_POST['password']);
  $firstname =($_POST['firstname']);
  $lastname = ($_POST['lastname']);
  $gender = ($_POST['gender']);
  $address = ( $_POST['address']);
  $contract = ($_POST['contract']);
  $email = ($_POST['email']);
  $status = ($_POST['status']);
      
  mysql_query ("INSERT INTO admin(admin_name, password, firstname, lastname, gender, address, contract, email, status) values ('$admin_name', '$password', '$firstname', '$lastname', '$gender', '$address', '$contract', '$email', '$status')")or die(mysql_error());
      
  header('location: admin_all.php');
  }
?>

<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>

<div class="container">
    <div class="row">
		    <div class="col-md-12" id="admin-page-body">		
            <br>
            <form role="form" class="well form-horizontal" method="post" action="admin_add.php">
				        <fieldset>
				            <legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:10px;">Add admin Details</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Admin Name</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="admin_name" placeholder="Admin Name" class="form-control"  type="text" required />
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="password" placeholder="Password" class="form-control"  type="password" required />
                            </div>
                        </div>
                    </div>

                  	<div class="form-group">
                        <label class="col-md-4 control-label">First Name</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="firstname" placeholder="First Name" class="form-control"  type="text" min="3" required />
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-md-4 control-label" >Last Name</label> 
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="lastname" placeholder="Last Name" class="form-control"  type="text" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="gender" class="form-control selectpicker" required />
                                  <option value="" hidden>Please select gender</option>
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
                                <input name="address" placeholder="Address" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>                

                    <div class="form-group">
                        <label class="col-md-4 control-label">Contract #</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="contract" placeholder="(+880)151-1110022" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="Ex: user@gmail.com" class="form-control"  type="email" data-error="Bruh, that email address is invalid" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="status" class="form-control selectpicker" >
                                    <option value="" hidden>Please select status</option>
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

<?php include('../recruit/includes/page_footer.php');?>
