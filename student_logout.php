<?php
session_start();
session_destroy();
header('localhost/campus placement training project/login.php'); 
echo "<a href='login.php'>back</a>";
?>