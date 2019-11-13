<?php include ('../recruit/includes/session_user.php');?>
<?php include ('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/user_menu.php');?>

<div class="container">
 <div class="row">
 <br>
 <div class="col-md-12 well">
   
 		<div class="row">
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#008C8C; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                    <h3>View Profile</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-user fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#06AEFF; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                	 <h3>Edit Profile</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#0082BF; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                	 <h3>Borrow Book</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-cart-plus fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#009F50; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                     <h3>Fine Details</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-user-circle fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
            
            
            <div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#0082BF; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                     <h3>Send report</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-flag-o fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#009F50; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                	 <h3>Ask Librarian</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-question-circle-o fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#008C8C; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                	 <h3>Highlights</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-wpexplorer fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-3 col-sm-4 col-xs-12 well" style="background:#06AEFF; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                     <h3>Versity Events</h3>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-calendar fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>        	
            <legend></legend>
        </div>
          
    <div class="row">
        <div class="col-md-4 well text-center">
        	<legend style="background:#06AEFF; color:#FFF;">Borrow book<br>search by Department</legend>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-warning">CSE</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-info">EEE</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-primary">BBA</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-success">LOW</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-danger">Math</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-warning">Bangla</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-info">Islamic</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-primary">English</a></p>
            <p class="col-md-4 well well-sm"><a href="#" class="btn btn-lg btn-success">Fashion</a></p>
        </div>
        <div class="col-md-4 well">
            <div class="list-group">
              <a class="list-group-item text-center  active">Book Collect Information</a>
              <a href="#" class="list-group-item list-group-item-action">First book<span class="badge">Computer</span></a>
              <a href="#" class="list-group-item list-group-item-action">First book borrow date<span class="badge">10/12/2016</span></a>
              <a href="#" class="list-group-item list-group-item-action">First book due date<span class="badge">17/12/2016</span></a>
              <a href="#" class="list-group-item list-group-item-action">second book<span class="badge">Amar Bangla</span></a>
              <a href="#" class="list-group-item list-group-item-action">second book borrow date<span class="badge">15/12/2016</span></a>
              <a href="#" class="list-group-item list-group-item-action">second book due date<span class="badge">21/12/2016</span></a>
              <a class="list-group-item active"></a>
            </div>
        </div>
                        
        <div class="col-md-4 well text-center text-primary">
            <legend style="background:#009F50; color:#FFF;">User Information</legend>
            <p>User Name: <span class="badge"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"];?></span></p>
            <p>E-Mail: <span class="badge"><?php echo $_SESSION["email"];?></span></p>
            <p>Password: <span class="badge"><?php echo $_SESSION["password"];?></span></p>
            <p>Gender: <span class="bg-info"><?php echo $_SESSION["gender"];?></span></p>
            <p>Address: <span class="bg-info"><?php echo $_SESSION["address"];?></span></p>
            <p>Contract: <span class="bg-info"><?php echo $_SESSION["contract"];?></span></p>
            <p>Type: <span class="bg-info"><?php echo $_SESSION["type"];?></span></p>
            <p>Level: <span class="bg-info"><?php echo $_SESSION["level"];?></span></p>
            <p><a class="btn btn-sm btn-primary" role="button" href="#">Want to change profile?</a></p>
        </div>
        
    </div>
    
            
</div>
</div>
</div>

<?php include('../recruit/includes/page_footer.php');?>