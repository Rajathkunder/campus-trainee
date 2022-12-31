<?php
$username=$_GET['username'];
$db=new mysqli('localhost','root','','campus');
$qry="delete from noti where username='$username'";
$rslt=$db->query($qry);
echo '<script>window.location.href="student_interface.php?username='.$username.'"</script>';
?>