<?php include ('../recruit/includes/session_subadmin.php');?>
<?php include ('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/subadmin_menu.php');?>

<div class="container">
 <div class="row">
 <br>
 <div class="col-md-12 well">
   
 		<div class="row">
        	<div class="col-md-2 col-sm-4 col-xs-12 well" style="background:#008C8C; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                    <p>2544</p><h5>Total&nbsp;User</h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-users fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-2 col-sm-4 col-xs-12 well" style="background:#9A5510; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                	<p>286</p><h5>Total&nbsp;Member</h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-2 col-sm-4 col-xs-12 well" style="background:#703838; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                	<p>1085</p><h5>Total&nbsp;Student</h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-user fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-2 col-sm-4 col-xs-12 well" style="background:#0082BF; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                    <p>124</p><h5>Total&nbsp;Teacher</h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-user-circle fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-2 col-sm-4 col-xs-12 well" style="background:#009F50; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                    <p>1985</p><h5>Total&nbsp;Active</h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-check-circle fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
        	<div class="col-md-2 col-sm-4 col-xs-12 well" style="background:#820000; color:#FFF; padding:20px;">
            	<div class="col-md-10 col-sm-10 col-xs-10 row">
                    <p>479</p><h5>Total&nbsp;Deactivate</h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                <span><i class="fa fa-times-circle fa-4x" aria-hidden="true"></i></span>
                </div>
            </div>
            <legend></legend>
        </div>
          
    <div class="row">
        <div class="col-md-4 well">
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-book fa-2x" aria-hidden="true"></i><br>Book all</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-plus-square-o fa-2x" aria-hidden="true"></i><br>Add book</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-external-link-square fa-2x" aria-hidden="true"></i><br>New book</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-users fa-2x" aria-hidden="true"></i><br>Member all</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i><br>Student</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-user fa-2x" aria-hidden="true"></i><br>Teacher</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i><br>Borrow</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-braille fa-2x" aria-hidden="true"></i><br>Borrow view</a>
            </div>
            <div class="well col-md-4 btn btn-default">
            	<a href="#"><i class="fa fa-retweet fa-2x" aria-hidden="true"></i><br>Return view</a>
            </div>
         </div>
        <div class="col-md-4 well">
            <div class="list-group">
              <a class="list-group-item text-center  active">Request Information</a>
              <a href="#" class="list-group-item list-group-item-action">Today member Request<span class="badge">14</span></a>
              <a href="#" class="list-group-item list-group-item-action">Total pending Member request..<span class="badge">80</span></a>
              <a href="#" class="list-group-item list-group-item-action">Today Book Request<span class="badge">44</span></a>
              <a href="#" class="list-group-item list-group-item-action">Total pending Book Request..<span class="badge">69</span></a>
              <a href="#" class="list-group-item list-group-item-action">Today Return Book Request<span class="badge">44</span></a>
              <a href="#" class="list-group-item list-group-item-action">Total pending Return Book Request..<span class="badge">69</span></a>
              <a class="list-group-item active"></a>
            </div>
        </div>
                        
        <div class="col-md-4 well">
            <legend class="text-center bg-primary">Books Information</legend>
            <div class="col-md-4">Total books</div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">40% complete</div>
            </div>
            <div class="col-md-4">New books</div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% complete</div>
            </div>
            <div class="col-md-4">Old books</div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">75% complete</div>
            </div>
            <div class="col-md-4">Lost books</div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:50%">80% complete</div>
            </div>
            <div class="col-md-4">Damage book</div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:30%">90% complete</div>
            </div>
            <div class="col-md-4">Order book</div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:70%">90% complete</div>
            </div>
            <div class="col-md-4">Replacement book</div>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:50%">90% complete</div>
            </div>

        </div>
    </div>
    
            
</div>
</div>
</div>
  
<?php include('../recruit/includes/page_footer.php');?>





