<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="subadmin-page-body">
            <br>
            <div class="well col-md-12">
				<legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Books Borrower List</legend>
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
		                            <th>Borrow Status</th>
		                            <th>Fine</th>
		                            <th>Action</th>	
		                        </tr>
		                   </thead>                   
							<tbody>
								<?php  $user_query=mysql_query("select * from borrow
		                        LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN booklist on borrowdetails.book_id =  booklist.book_id
		                        LEFT JOIN member ON borrow.member_id = member.member_id
		                        ORDER BY borrow.borrow_id DESC")or die(mysql_error());
								  while($row=mysql_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
									
									 $timezone = "Asia/Dhaka";
									 if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
									 $now = time();
									 $DueDate = strtotime($row['due_date']);
									 $datediff = $now - $DueDate;
									 $day_left=floor($datediff/(60*60*24));

									 /*if($day_left>0){
										require_once "../recruit/phpmailer/class.phpmailer.php";
										$mail = new PHPMailer;

										//From email address and name
										$mail->From = "from@yourdomain.com";
										$mail->FromName = "Full Name";
										
										//To address and name
										$mail->addAddress($row['email'], $row['firstname']." ".$row['lastname']);
										//$mail->addAddress("recepient1@example.com"); //Recipient name is optional
										
										//Address to which recipient will reply
										$mail->addReplyTo("reply@yourdomain.com", "Reply");
										
										//CC and BCC
										//$mail->addCC("cc@example.com");
										//$mail->addBCC("bcc@example.com");
										
										//Send HTML or Plain Text email
										$mail->isHTML(true);
										
										$mail->Subject = "Subject Text";
										$mail->Body = "<i>Mail body in HTML</i>";
										$mail->AltBody = "This is the plain text version of the email content";
										
										if(!$mail->send()) 
										{
											echo "Mailer Error: " . $mail->ErrorInfo;
										} 
										else 
										{
											echo "Message has been sent successfully";
										}
									}*/
									
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
										<td><?php echo $row['borrow_status']; ?></td>
		                                <td width="100">
											<?php  
												if($day_left<0){echo $day_left ." days remaining";}
												else{
													if($day_left>0){echo $day_left ." days left<br>";
														echo "Fine =&nbsp;" .$day_left * 5 ." Tk.";
													}
												}
											?>
		                                </td>
										<td width="100">
		                                	<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#borrow_delete<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
		                                    	<?php include('borrow_delete_modal.php'); ?>
		                                	<a rel="tooltip"  title="Return" id="<?php echo $borrow_details_id; ?>" href="#borrow_return<?php echo $borrow_details_id; ?>" data-toggle="modal"    class="btn btn-success"><i class="fa fa-repeat" aria-hidden="true"></i></a>
		                                    	<?php include('borrow_return_modal.php'); ?>
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
        
        
  
        
