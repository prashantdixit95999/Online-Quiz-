<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdb');
$username=$_POST['username'];
$password=$_POST['password'];

$res=mysqli_query($con,"select * from user where username='$username' && password='$password' ");
$row=mysqli_num_rows($res);
if($row==1)
{
	header("location:http://localhost/quiz/login1.php");
	}
else
{
	$result=mysqli_query($con,"insert into user values('$username',$password)");
	header("location:http://localhost/quiz/login1.php");
}
	

?>