<?php include ('../recruit/includes/database.php');?>
<?php 
$id=$_POST['selector'];
$member_id  = $_POST['member_id'];
$collecte_date  = $_POST['collecte_date'];

$user_query2 = mysql_query("select * from requestdetails where member_id = '$member_id'")or die(mysql_error());
while($row=mysql_fetch_array($user_query2)){
	$count_member = mysql_num_rows($user_query2);
	$total_member = $count_member;
}
if($total_member == 2){echo "<script>alert('Sorry, allready 2 request send. A member can be send 2 request.'); window.location.href='request_book.php';</script>";}

else if($id == '' ){ 
header("location:request_book.php");
?> 
<?php }else{
$query = mysql_query("select * from borrow order by borrow_id DESC")or die(mysql_error());
$row = mysql_fetch_array($query);
$book_id  = $row['book_id']; 

$N = count($id);
for($i=0; $i < $N; $i++)
{
		mysql_query("insert into requestdetails(book_id,member_id,request_date,collecte_date,request_status) values ('$id[$i]','$member_id',NOW(),'$collecte_date','requested')")or die(mysql_error());

}
header("location:request_book.php");
}  
?>
	
	

	
	