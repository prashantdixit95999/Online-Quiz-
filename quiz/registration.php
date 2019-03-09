<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdb');

?>
<html>
<head>
<title>
Login Page
</title>
<style>
body{
	background:url(pic1.Gif) no-repeat;
	background-size:cover;
}
.div1
{
	top-margin:20px;
width:400px;
height:350px;
position:absolute;
border:3px solid;
top:30%;
left:40%;
background-color:pink;
	
}	
.i
{
margin-top:30px;
font-size:18px;
}
#is{
	
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

	margin-left:130px;
}
a
{
	text-decoration:none;
}
</style>
</head>                      
<body>

<div class='div1' align='center'>
<h1>Sign UP</h1>
<form action='validation1.php' method='post'>
<table>
<tr>
<td><h3><pre>Enter Username <input type='text' class='i' placeholder="Username" name='username' /></pre></h3></td>
</tr>
<tr>
<td><h3><pre>Enter Password <input type='password' class='i' placeholder="Password" name='password' /></pre></h3></td>
</tr>
<tr>
<td><input type='submit' class='i' id='is' value='submit' /></td></tr>



</table>
</form>
</div>
</body>
</html>