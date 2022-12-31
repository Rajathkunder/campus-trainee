<!DOCTYPE html>
<html>
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 <script src="sweetalert.js"></script>
 <body>
<?php 
@$cn=new mysqli('localhost','root','','campus');
$username=$_GET['staff_id'];
$send=$_POST['send'];
$qry3="insert into staff_support(staff_id,send) values('$username','$send')";
if($rslt2=$cn->query($qry3)){
	echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Your query send successful',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='staffinterface.php?staff_id=".$username."' })</script>";
	//echo'<script>window.location.href='staffinterface.php?staff_id=".$username."'</script>';

}
?>
</body>
</html>
