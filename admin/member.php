<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="subadmin-page-body">
            <br>
        	<div class="col-md-12 well">
            	<legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Member List</legend>
            </div>
            <div class="panel panel-default">
            	<div class="panel panel-body"> 
                    <table class="table table-bordered table-striped table-condensed table-responsive table-hover" id="example">
                        <thead class="bg-primary">
                            <tr>                                                    
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Contract</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Action</th>	
                            </tr>
                       </thead>                   
                        <tbody>
                            <?php              
                                $user_query = mysql_query("select * from member where type='member'")or die(mysql_error());
                                while ($row = mysql_fetch_array($user_query)){
                                $id=$row['member_id'];?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['gender']; ?> </td> 
                                    <td><?php echo $row['address']; ?> </td>
                                    <td><?php echo $row['contract']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['type']; ?></td>
                                    <td><?php echo $row['level']; ?></td>		
                                    <td><?php echo $row['status']; ?></td>
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#members_delete<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <?php include('members_delete_modal.php'); ?>
                                        <a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="members_edit.php<?php echo '?id='.$id; ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>        
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>      
        </div>
    </div>
</div>
       
<?php include('../recruit/includes/page_footer.php');?>
        
        
  
        
