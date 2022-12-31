<?php 
$staff_id=$_GET['staff_id'];
@$cn=new mysqli('localhost','root','','campus');
	if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
	$dat=$_POST['dat'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];
	$duration=$_POST['dur1'];
	$qry2="select exam_id from exam_set order by exam_id desc limit 1";
	$rslt2=$cn->query($qry2);
	$r2=$rslt2->fetch_assoc();
    $exam_id1=$r2['exam_id'];
    $qry1="select username from staff where staff_id='$staff_id'";
    $rslt1=$cn->query($qry1);
    $r1=$rslt1->fetch_assoc();
    $username=$r1['username'];
	$qry="update exam_set set start_time='$stime',end_time='$etime',date='$dat',duration='$duration' where exam_id='$exam_id1'";
	$rslt=$cn->query($qry);
	
		echo'<script>
		window.location.href="staffinterface.php?username='.$username.'";</script>';

	
?>