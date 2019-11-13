<?php include ('../recruit/includes/session_admin.php');?>
<?php include ('../recruit/includes/database.php');?>

<?php
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$book_title = ($_POST['book_title']);
		$author = ($_POST['author']);
		$book_copies = ($_POST['book_copies']);
		$book_pablication = ($_POST['book_pablication']);
		$publisher_name = ($_POST['publisher_name']);
		$isbn = ($_POST['isbn']);
		$copyright_year = ($_POST['copyright_year']);
		$date_added = ($_POST['date_added']);
		$department = ($_POST['department']);
		$status = ($_POST['status']);
		
		mysql_query ("UPDATE booklist SET book_title = '$book_title', author = '$author', book_copies = '$book_copies', book_pablication = '$book_pablication', publisher_name = '$publisher_name', isbn = '$isbn', copyright_year = '$copyright_year', date_added = '$date_added', department = '$department', status = '$status' WHERE book_id='$id'")or die(mysql_error());
			
		header('location: books_all.php');
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
	$query=mysql_query("select * from booklist where book_id='$get_id'")or die(mysql_error());
	$row=mysql_fetch_array($query);
?>

            <form method="post" action="books_edit.php" class="well form-horizontal">
                <legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:10px;">Edit Book Details</legend>

                <div class="form-group">
                    <label class="col-md-4 control-label">Book Title</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i></span>
                            <input  type="text"  name="book_title" class="form-control" value="<?php echo $row['book_title']?>" required />
                            <input class="form-control" type="hidden" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required />
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" >Author</label> 
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text"  name="author" class="form-control" value="<?php echo $row['author']?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group"> 
                    <label class="col-md-4 control-label">Book Copies</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
                            <input class="form-control" type="number" name="book_copies" value="<?php echo $row['book_copies']?>" required />
                      </div>
                    </div>
                </div>                   

                <div class="form-group">
                    <label class="col-md-4 control-label">Book Publication</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-compressed"></i></span>
                            <input class="form-control" type="text" name="book_pablication" value="<?php echo $row['book_pablication']?>" required />
                        </div>
                    </div>
                </div>                

                <div class="form-group">
                    <label class="col-md-4 control-label">Publisher Name</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" type="text" name="publisher_name" value="<?php echo $row['publisher_name']?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">ISBN</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                            <input class="form-control" type="text" name="isbn" value="<?php echo $row['isbn']?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Copyright Year</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-copyright-mark"></i></span>
                            <input class="form-control" type="year" name="copyright_year" value="<?php echo $row['copyright_year']?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Date Added</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input class="form-control" type="date" name="date_added" value="<?php echo $row['date_added']?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group"> 
                    <label class="col-md-4 control-label">Department</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="department" class="form-control selectpicker" required />
                              <option><?php echo $row['department']?></option>
                                <option>CSE</option>
                                <option>EEE</option>
                                <option>BBA</option>
                                <option>LOW</option>
                                <option>English</option>
                                <option>Bangla</option>
                                <option>Fashion Design</option>
                                <option>Islamic Studies</option>
                            </select>
                        </div>
                    </div>
                </div>                   
                   
                <div class="form-group"> 
                    <label class="col-md-4 control-label">Status</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select type="text" name="status" class="form-control selectpicker" >
                              <option><?php echo $row['status']?></option>
                              <option>New</option>
                                <option>Old</option>
                                <option>Damage</option>
                                <option>Lost</option>
                                <option>Replacement</option>
                                <option>Order</option>
                        	  </select>
                        </div>
                    </div>
                </div>                   

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <a href="books_all.php" class="btn btn-danger" role="button">Cancel&nbsp;<i class="fa fa-times-circle" aria-hidden="true"></i></a>
                        <button type="reset" class="btn btn-warning" >Reset&nbsp;<i class="fa fa-refresh" aria-hidden="true"></i></button>
                        <button type="submit" name="submit" class="btn btn-success" >Update&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>               
        </div>
    </div>
</div>

<?php include ('../recruit/includes/page_footer.php');?>



