<?php include ('../recruit/includes/session_admin.php');?>
<?php include ('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/admin_menu.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="subadmin-page-body">
            <br> 
            <div class="col-md-12 well">
                <legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Fashion Design Department Book Table</legend>
                    <form method="post" action="borrow_save.php">
                        <div class="col-md-2 well">
                            <div class="control-group">
                                <label class="control-label">Borrower Name</label>
                                <div>
                                  <select name="member_id" class="chzn-select" style="width:100%;" required>
                                    <option></option>
                                    <?php $result =  mysql_query("select * from member where status = 'Active'")or die(mysql_error());
                                    while ($row=mysql_fetch_array($result)){ 
                                    ?>
                                    <option value="<?php echo $row['member_id']; ?>"><?php echo $row['firstname']." ".$row['lastname']; ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label class="control-label">Due Date</label>
                                <div class="input-group date" id="dateselect">
                                    <input type="datetime" name="due_date" maxlength="0" class="form-control" placeholder="Select Date" required>
                                    <div class="input-group-addon input-daterange">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="control-group"> 
                                <div class="controls">
                                    <button name="delete_student" class="btn btn-sm btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Borrow</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel panel-body"> 
                                <table class="table table-hover table-striped table-bordered table-condensed table-responsive" id="example">
                                    <thead class="bg-primary">
                                        <tr>                                 
                                            <th>Book Title</th>                                 
                                            <th>Department</th>
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
                                        <?php  $user_query=mysql_query("select * from booklist where department='Fashion Design'")or die(mysql_error());
                                            while($row=mysql_fetch_array($user_query)){
                                            $id=$row['book_id'];
                                            $book_copies = $row['book_copies'];
                                            $borrow_details = mysql_query("select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
                                            $row11=mysql_fetch_array($borrow_details);
                                            $count = mysql_num_rows($borrow_details);
                                            $total =  $book_copies  -  $count;
                                            ?>
                                            <tr class="del<?php echo $id ?>">
                                                <td><?php echo $row['book_title']; ?></td>
                                                <td><?php echo $row ['department']; ?> </td>
                                                <td><?php if($total>0){echo $total;}else{ echo "<span style='color:red'>stock end</span>";} ?></td>
                                                <td><?php echo $row['author']; ?> </td>
                                                <td><?php echo $row['book_pablication']; ?></td>
                                                <td><?php echo $row['publisher_name']; ?></td>
                                                <td><?php echo $row['isbn']; ?></td>
                                                <td><?php echo $row['copyright_year']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td width="100">
                                                    <?php if($total>0){?>
                                                    <input id="" class="uniform_on" name="selector[]" type="checkbox" data-off-active-cls="btn-primary" value="<?php echo $id; ?>" >
                                                    <?php }else{ ?>
                                                    <input id="" class="uniform_on" name="selector[]" type="checkbox" data-off-active-cls="btn-primary" disabled value="<?php echo $id; ?>" >
                                                    <?php } ?>

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
  
<?php include('../recruit/includes/page_footer.php');?>
        
        
  
        
