<?php include ('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/public_menu.php');?>

<div class="container">
<div class="col-md-12" id="link-page-body">
	<div class="row">
    <div class="col-md-12">
    <br>
        
<div class="col-md-12 well">
    <legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Request for Borrow Book</legend>
        <form method="post" action="request_book_save.php">
            <div class="col-md-2 well">
                <div class="control-group">
                	<label class="control-label">Borrower Name</label>
                	<div>
                      <select name="member_id" class="chzn-select" style="width:100%;" required>
                      <option>
					  		<?php if(isset($_SESSION["member_id"])) {
							echo $_SESSION["firstname"]." ".$_SESSION["lastname"];
							}
							?>
                       </option>
                        <option></option>
                        <?php $result =  mysql_query("select * from member")or die(mysql_error());
                        while ($row=mysql_fetch_array($result)){ ?>
                        <option disabled value="<?php echo $row['member_id']; ?>">
							<?php
								echo $row['firstname']." ".$row['lastname'];
							?>
                        </option>
                        <?php } ?>
                      </select>
                    </div>
    			</div>
                <br>
                <div class="control-group">
                    <label class="control-label">Collecte due Date</label>
                    <div class="input-group date" id="dateselect">
                        <input type="datetime" name="collecte_date" maxlength="0" class="form-control" placeholder="Select Date" required>
                        <div class="input-group-addon input-daterange">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="control-group"> 
                    <div class="controls">
                        <button name="delete_student" class="btn btn-sm btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Send Request</button>
                    </div>
                </div>
                <br>
                <div class="panel panel-default">
                  <div class="panel-heading text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Warning!</div>
                  <div class="panel-body text-center">
                    <?php if(!isset($_SESSION["member_id"])) {
					echo "Please login for Reservation Book";
					}
					?>
                  </div>
                </div>
            </div>
            <div class="col-md-10">
                
          <div class="panel panel-default">
        	<div class="panel panel-body table-responsive"> 
                <table class="table table-hover table-striped table-bordered table-condensed" id="example">
                    <thead class="bg-primary">
                        <tr>                                 
                            <th>Book Title</th> 
                            <th>Copies</th>
                            <th>Author</th>
                            <th>Book Publication</th>
                            <th>Publisher Name</th>
                            <th>ISBN</th>
                            <th>Copyright Year</th>
                            <th>Status</th>
                            <th>Add</th>		
                        </tr>
                    </thead>                   
    				<tbody>
                    	<?php  $user_query=mysql_query("select * from booklist")or die(mysql_error());
    					while($row=mysql_fetch_array($user_query)){
    					$id=$row['book_id'];
						$book_copies = $row['book_copies'];
						?>
    					<tr class="del<?php echo $id ?>">
                            <td><?php echo $row['book_title']; ?></td>
                            <td><?php echo $row['book_copies'];; ?></td>
                            <td><?php echo $row['author']; ?> </td>
                            <td><?php echo $row['book_pablication']; ?></td>
                            <td><?php echo $row['publisher_name']; ?></td>
                            <td><?php echo $row['isbn']; ?></td>
                            <td><?php echo $row['copyright_year']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td width="100">
    							<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
                            </td>
                        </tr>
    				<?php } ?>
                    </tbody>
                </table>
                </div>
                </div>
                
            </div>
        </form>
        </div>
        
    </div>
    </div>
</div>
</div>
  
<?php include('../recruit/includes/page_footer.php');?>
        
        
  
        
