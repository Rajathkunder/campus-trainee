<!DOCTYPE html>
<html>
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 <script src="sweetalert.js"></script>
 <body>
<?php 
@$cn=new mysqli('localhost','root','','campus');
$username=$_GET['username'];
$send=$_POST['send'];
$qry3="insert into stud_support(username,send) values('$username','$send')";
if($rslt2=$cn->query($qry3)){
	echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Your query sent successful',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='student_interface.php?username=".$username."' })</script>";
	//echo'<script>window.location.href='student_interface.php?username=".$username."'</script>';

}
?>
</body>
</html>
