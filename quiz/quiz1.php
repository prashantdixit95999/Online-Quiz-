<?php
session_start();

if(!isset($_SESSION['username']))
	header('location:login1.php');
	
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdb');


?>
<html>
<head>
<style>

	h1
	{
		text-decoration:underline;
		text-align:center;
		
	}
	#div1
	{
		background-color:lightblue;
		height:60px;
	}
	#div2{
		text-size:10px;
	}
	.i
	{
		font-size:20px;
	}
	#s
	{
		  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:125%;
	}
</style>
<title>
Quiz System
</title>
</head>
<body>
<div id='div1'>
<h1>QUIZ SYSTEM</h1>
</div>
<div id='div4>

<div id='div2'>
<h1>Hii..<?php echo $_SESSION['username'] ?></h1>
</div>
<script>

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
			document.myform.submit();
  
        }
    }, 1000);
}

window.onload = function () {
    
        display = document.querySelector('#time');
    startTimer(600, display);
};
</script>
<div><h1>Time Left <span id="time"></span> minutes!</h1></div>
<form name='myform' action="result1.php" method='post'>
<table>
<tr><td class='i'>1.<?php $res=mysqli_query($con,'select * from question where q_id=1'); $r=mysqli_fetch_array($res); echo $r['question'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='0' value='1'/><?php $res=mysqli_query($con,'select * from answer where ans=1'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'   name='0' value='2' /><?php $res=mysqli_query($con,'select * from answer where ans=2'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='0' value='3' /><?php $res=mysqli_query($con,'select * from answer where ans=3'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='0' value='4' /><?php $res=mysqli_query($con,'select * from answer where ans=4'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></br></br></td></tr>
<tr><td class='i'>2.<?php $res=mysqli_query($con,'select * from question where q_id=2'); $r=mysqli_fetch_array($res); echo $r['question'];  ?></td></tr>
<tr><td class='i'> <input type='radio'  name='1' value='1' /><?php $res=mysqli_query($con,'select * from answer where ans=5'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='1' value='2' /><?php $res=mysqli_query($con,'select * from answer where ans=6'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='1' value='3' /><?php $res=mysqli_query($con,'select * from answer where ans=7'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='1' value='4' /><?php $res=mysqli_query($con,'select * from answer where ans=8'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></br></br></td></tr>
<tr><td class='i'>3.<?php $res=mysqli_query($con,'select * from question where q_id=3'); $r=mysqli_fetch_array($res); echo $r['question'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='2' value='1' /><?php $res=mysqli_query($con,'select * from answer where ans=9'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='2' value='2' /><?php $res=mysqli_query($con,'select * from answer where ans=10'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='2' value='3' /><?php $res=mysqli_query($con,'select * from answer where ans=11'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'   name='2' value='4'/><?php $res=mysqli_query($con,'select * from answer where ans=12'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></br></br></td></tr>
<tr><td class='i'>4.<?php $res=mysqli_query($con,'select * from question where q_id=4'); $r=mysqli_fetch_array($res); echo $r['question'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='3' value='1' /><?php $res=mysqli_query($con,'select * from answer where ans=13'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='3' value='2' /><?php $res=mysqli_query($con,'select * from answer where ans=14'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='3' value='3' /><?php $res=mysqli_query($con,'select * from answer where ans=15'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='3' value='4' /><?php $res=mysqli_query($con,'select * from answer where ans=16'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'>5.<?php $res=mysqli_query($con,'select * from question where q_id=5'); $r=mysqli_fetch_array($res); echo $r['question'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='4' value='1' /><?php $res=mysqli_query($con,'select * from answer where ans=17'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='4' value='2' /><?php $res=mysqli_query($con,'select * from answer where ans=18'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'><input type='radio'  name='4' value='3' /><?php $res=mysqli_query($con,'select * from answer where ans=19'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></td></tr>
<tr><td class='i'> <input type='radio'  name='4' value='4' /><?php $res=mysqli_query($con,'select * from answer where ans=20'); $r=mysqli_fetch_array($res); echo $r['answer'];  ?></br></br></td></tr>
<tr><td><input type='submit' value='submit' id='s'/></br></br></td></tr>
</table>
</table>
</table>
</table>
</table>
</form>
</div>
</body>
</html>