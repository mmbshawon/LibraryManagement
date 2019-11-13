<?php include ('../recruit/includes/session_admin.php');?>
<?php include('../recruit/includes/database.php');?>

<?php 
	$id=$_POST['selector'];
	$member_id  = $_POST['member_id'];
	$due_date  = $_POST['due_date'];
	$user_query2 = mysql_query("select * from borrow where member_id = '$member_id'")or die(mysql_error());
	while($row=mysql_fetch_array($user_query2)){
	$count_member = mysql_num_rows($user_query2);
	$total_member = $count_member;
	}
	if($total_member == 2){echo "<script>alert('Sorry, allready 2 books include in your collection'); window.location.href='borrow.php';</script>";}
	else if($id == '' ){ 
	header("location: borrow.php");
	}else{
	mysql_query("insert into borrow(member_id,date_borrow,due_date) values ('$member_id',NOW(),'$due_date')")or die(mysql_error());
	$query = mysql_query("select * from borrow order by borrow_id DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$borrow_id  = $row['borrow_id']; 
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		mysql_query("insert borrowdetails (book_id,borrow_id,borrow_status) values('$id[$i]','$borrow_id','pending')")or die(mysql_error());
	}
	header("location: borrow_view.php");
	} 
?>
	
	