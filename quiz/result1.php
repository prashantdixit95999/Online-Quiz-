
<html>
<head>
<title>
Result
</title>
<style>

	#div1
	{
		background-color:orange;
		height:60px;
		text-align:center;
		
	}
		#div2
	{
		background-color:orange;
		height:60px;
		text-align:center;
		top-margin:20px;
width:350px;
height:250px;
position:absolute;
border:3px solid;
top:30%;
left:40%;
background-color:pink;
		
	}
	h1{
		font-size:50px;
	}
	a
	{
		margin-left:40%;
		text-decoration:none;
	}
	#h33{
		font-size:80px:
	}
</style>
</head>
<body>
<div id='div1'>
<h1>Quiz Result</h1>
</div>
<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:login1.php');
$con = mysqli_connect('localhost','root');
	

	mysqli_select_db($con,'quizdb');
$count=count($_POST);
$marks=0;
for($i=0;$i<5;$i++)
{
$q="select * from question where q_id=$i+1";
$t=mysqli_query($con,$q);
$a=mysqli_fetch_array($t);

if(isset($_POST["$i"]))
{
if($a['ans_id']==$_POST["$i"])
$marks++;
}

}

	 
?>
<div id='div2'>
<table>
<tr><td><pre><h2>Total Questions Attempted = <?php echo "$count" ?> </h2></pre></br></br></br></td></tr>
<tr><td><pre><h2>Total Marks Obtained   <?php echo "$marks" ?>   </h2></pre></br></br></td></tr>
<tr><td><pre><h2 id='h33'><a href="logout1.php">Logout</a>   </h2></pre></td></tr>
</body>
</html>