<?php
session_start();
session_destroy();

header('location:http://localhost/quiz/login1.php');

?>