<?php include ('../recruit/includes/session_subadmin.php');?>
<?php include('../recruit/includes/database.php');?>
<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/subadmin_menu.php');?>


      <div class="container">
        	<div class="row">
        	<div class="col-md-12" id="subadmin-page-body">
                <br>
                <div class="col-md-12 well">
                	<legend class="text-center" style="background:#FFF; color:#000; padding:10px; border-radius:5px;">Book List</legend>
                	<div class="col-md-4">
                    	<p><a href="books_add.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New Books</a></p>
                    </div>
                    <div class=" col-md-4 pull-right">
                        <div class="input-group">
                          <input id="searchInput" name="search" type="text" class="form-control" placeholder="Search from this page...">
                          <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i> Search</span>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                	<div class="panel panel-body"> 
                <table class="table table-bordered table-striped table-condensed table-responsive table-hover" id="example">
                    <thead class="bg-primary">
                        <tr>                                
                            <th>Book Title</th>                                 
                            <th>Author</th>
                            <th>Copies</th>
                            <th>Book Publication</th>
                            <th>Publisher Name</th>
                            <th>ISBN</th>
                            <th>Copyright Year</th>
                            <th>Date Added</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Action</th>		
                        </tr>
                   </thead>                   
					<tbody>
                    	<?php  $user_query=mysql_query("select * from booklist")or die(mysql_error());
						while($row=mysql_fetch_array($user_query)){
						$id=$row['book_id'];?>
						<tr class="del<?php echo $id ?>">
                            <td><?php echo $row['book_title']; ?></td>
                            <td><?php echo $row['author']; ?> </td> 
                            <td><?php echo $row['book_copies']; ?> </td>
                            <td><?php echo $row['book_pablication']; ?></td>
                            <td><?php echo $row['publisher_name']; ?></td>
                            <td><?php echo $row['isbn']; ?></td>
                            <td><?php echo $row['copyright_year']; ?></td>		
                            <td><?php echo $row['date_added']; ?></td>
                            <td><?php echo $row ['department']; ?> </td>
                            <td><?php echo $row['status']; ?></td>
                            <td width="100">
								<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#books_delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
								<?php include('books_delete_modal.php'); ?>
								<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="books_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
<?php include('../recruit/includes/page_footer.php');?>
        
        
  
        
