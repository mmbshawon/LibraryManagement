<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>


<div class="container">
    <div class="row">
        <div class="col-md-12" id="subadmin-page-body">
        	<br>
        	<div class="well col-md-12">
            	<legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Borrowed Return Book List</legend>

                <div class="panel panel-default">
                    <div class="panel panel-body">
                        <table class="table table-bordered table-striped table-condensed table-responsive table-hover" id="example">
                            <thead class="bg-primary">
                                <tr> 
                                    <th>Book Title</th>
                                    <th>Borrower Name</th>
                                    <th>Borrower Type</th>
                                    <th>Borrower Level</th>
                                    <th>Contract</th>
                                    <th>Email</th>
                                    <th>Borrow Date</th>                                 
                                    <th>Due Date</th>                                
                                  	<th>Returned Date</th>
                                </tr>
                            </thead>                   
        					<tbody>
        						<?php  $user_query=mysql_query("select * from borrow
                                    LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
            						LEFT JOIN booklist on borrowdetails.book_id =  booklist.book_id
                                    LEFT JOIN member ON borrow.member_id = member.member_id
                                    where borrowdetails.borrow_status = 'returned'ORDER BY borrow.borrow_id DESC")or die(mysql_error());
            						  while($row=mysql_fetch_array($user_query)){
            							$id=$row['borrow_id'];
            							$book_id=$row['book_id'];
            							$borrow_details_id=$row['borrow_details_id'];
            							?>
            							<tr class="del<?php echo $id ?>">
            								<td><?php echo $row['book_title']; ?> </td> 
            								<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
            								<td><?php echo $row['type']; ?></td>
            								<td><?php echo $row['level']; ?></td>
            								<td><?php echo $row['contract']; ?></td>
            								<td><?php echo $row['email']; ?></td>
            								<td><?php echo $row['date_borrow']; ?> </td> 
            								<td><?php echo $row['due_date']; ?> </td>
            								<td><?php echo $row['date_return']; ?> </td>
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
        
        
  
        
