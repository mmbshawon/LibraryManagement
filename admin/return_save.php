<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php'); ?>

<?php 
$id=$_GET['id'];
$book_id = $_GET['book_id'];

mysql_query("update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'")or die(mysql_error());						
 header('location: borrow_view.php');

?>	