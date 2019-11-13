<?php include ('../recruit/includes/session_subadmin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/subadmin_menu.php');?>

        <div class="container">
        	<div class="row">
        	<div class="col-md-12" id="subadmin-page-body">
            <br>
            
            <div class="well col-md-12">
				<legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Request Books Borrower List</legend>

                <div class="panel panel-default">
                <div class="panel panel-body">
                <table class="table table-bordered table-striped table-condensed table-responsive table-hover" id="example">
                    <thead class="bg-primary">
                        <tr> 
                            <th hidden>Request Id</th>
                            <th>Book Title</th>
                            <th>Borrower Name</th>
                            <th>Borrower Type</th>
                            <th>Borrower Level</th>
                            <th>Contract</th>
                            <th>Email</th>
                            <th>Request Date</th>
                            <th>Collected Due Date</th>
                            <th>Request Status</th>
                            <th>Action</th>	
                        </tr>
                   </thead>                   
					<tbody>
						<?php  $user_query=mysql_query("select * from requestdetails
						LEFT JOIN booklist on requestdetails.book_id = booklist.book_id
						LEFT JOIN member ON requestdetails.member_id = member.member_id")or die(mysql_error());
						  while($row=mysql_fetch_array($user_query)){
							$id=$row['request_details_id'];
							$book_id=$row['book_id'];
							$member_id=$row['member_id'];
							?>
							<tr class="del<?php echo $id ?>">

								<td hidden><?php echo $row['request_details_id']; ?> </td>
                                <td><?php echo $row['book_title']; ?> </td>
								<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
								<td><?php echo $row['type']; ?></td>
								<td><?php echo $row['level']; ?></td>
								<td><?php echo $row['contract']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['request_date']; ?></td>
								<td><?php echo $row['collecte_date']; ?></td>
								<td><?php echo $row['request_status']; ?></td>
								<td width="100">
                                	<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#borrow_delete<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    	<?php include('borrow_delete_modal.php'); ?>
                                	<a rel="tooltip"  title="Return" href="request_book_borrow.php?id=<?php echo $id;?>&member_id=<?php echo $member_id ;?>&book_id=<?php echo $book_id ;?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </td> 
							</tr>
						<?php } ?>
                   </tbody>
                </table>
                </div>
                </div>
                

                </div>

            	        
             </div>
        </div>
       </div>
<?php include('../recruit/includes/page_footer.php');?>
        
        
  
        
