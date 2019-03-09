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
width:350px;
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

	margin-left:44px;
}
a
{
	text-decoration:none;
}
</style>
</head>                      
<body>

<div class='div1' align='center'>
<h1>Login Page</h1>
<form action="check1.php" method='post'>
<table>
<tr>
<td><input type='text' class='i' placeholder="Enter Username" name='username' /></td>
</tr>
<tr>
<td><input type='password' class='i' placeholder="Enter Password" name='password' /></td>
</tr>
<tr>
<td><input type='submit' class='i' id='is' value='submit' /></td>
</tr>
<tr><td><h3>Don't have Account ? </h3></td></tr>
<tr><td><h3><pre><a href="registration.php">      Sign Up </a></pre></h3></td></tr>
</table>
</form>
</div>
</body>
</html>