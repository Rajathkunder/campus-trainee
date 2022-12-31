<?php 
$type=$_GET['type'];
$staff_id=$_GET['staff_id'];
@$cn=new mysqli('localhost','root','','campus');
	if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
echo'
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="sweetalert.js"></script>
	<style>
	body{
			background:#042331;
			color:white;
		}
		*{
		font-size:30px;
	}
	.cont{
		border: 5px outset #696969;
		border-radius:10px;
		width:60%;
		margin-left:20%;
		margin-top:7%;
		height:500px;
		background:#031a25;
	}
	.l{
		margin-left:70px;
	}
	td{
		width:400px;
		height:70px;
	}
	.td1{
		width:550px;
	}
	.submit{
		margin-left:250px;
		margin-top:30px;
		padding:10px;
		border: 2px outset #696969;
		border-radius:10px;
		color:white;
		background:transparent;
		cursor:pointer;
	}
.submit1{
		margin-left:80px;
		margin-top:30px;
		padding:10px;
		border: 2px outset #696969;
		border-radius:10px;
		color:white;
		background:transparent;
		cursor:pointer;
	}


	.radio{
		size:25px;
 transform: scale(1.0); 
	}
	input{

			background:#042331;
			color:white;
	}
	</style>
</head>
<body>
<div class="cont">
	<form method="POST" action="">
	<table>
		<tr><td><label class="l">Select Date</label></td><td><input type="date" name="dat" Required></td></tr>
		<tr><td><label class="l">Select Start Time</label></td><td><input type="time" name="stime" Required></td></tr>
		<tr><td><label class="l">Select End Time</label></td><td><input type="time" name="etime" Required></td></tr>
		<tr><td><label class="l">Select Duration</label></td><td class="td1">
		<label><input type="radio" class="radio" name="dur1" value="15">15min</label><br>
		<label><input type="radio" class="radio"name="dur1" value="30">30min</label><br>
		<label><input type="radio" class="radio"name="dur1" value="45">45min</label><br>
		<label><input type="radio" class="radio"name="dur1" value="60">60min</label><br>
		<label><input type="radio" class="radio"name="dur1" value="90">90min</label></td></tr>
		<tr><td><label><input type="submit" class="submit" value="Confirm" name="submit"></form></td><td>
		<form method="POST"><input type="submit" class="submit1" value="Cancel" name="cancel"></td></tr></table>
	</div>';

if(isset($_POST['submit']))
{
	$dat=$_POST['dat'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];
	$duration=$_POST['dur1'];
	$valid=0;
	$date=array();
			$d1=0;
			$date1=strtok($dat,"-");
			while($date1!="")
			{
				array_push($date,$date1);
				$date1=strtok("-");
				$d1=$d1+1;
			}
			date_default_timezone_set('Asia/Kolkata');
			$today=date("Y-m-d");
			$pdate=array();
			$pd1=0;
			$pdate1=strtok($today,"-");
			while($pdate1!="")
			{
				array_push($pdate,$pdate1);
				$pdate1=strtok("-");
				$pd1=$pd1+1;
			}
			$stim=explode(":", $stime);
			$st=$stim[0]*60;
			$st=$st+$stim[1];
 
			$etim=explode(":", $etime);
			$et=$etim[0]*60;
			$et=$et+$etim[1];
		if($st>=$et)
		{
			echo"<script>Swal.fire({ 
                      icon: 'warning',
                      title: 'Enter valid time',
                      showConfirmButton: false,
                      timer: 2000
                    })</script>";

		}
		else
		{
			if($date[0]<$pdate[0])
			{
				echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Please enter valid date',
                      showConfirmButton: false,
                      timer: 2000
                    })</script>";
				
			}
			else if($date[0]==$pdate[0])
			{
					if($date[1]<$pdate[1])
					{
						echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Please enter valid date',
                      showConfirmButton: false,
                      timer: 2000
                    })</script>";
						
					}
					else if($date[1]==$pdate[1])
					{
						if($date[2]<$pdate[2])
						{
							echo"<script>Swal.fire({ 
                      icon: 'warning',
                      title: 'Please enter valid date',
                      showConfirmButton: false,
                      timer: 2000
                    })</script>";
							
						}
						else
						{
							$valid=1;
						}
					}
					else
					{
						$valid=1;
					}
			}
			else
			{
				$valid=1;
			}
		}
			if($valid==1)
			{
				$qry2="select exam_id from exam_set order by exam_id desc limit 1";
				$rslt2=$cn->query($qry2);
				$r2=$rslt2->fetch_assoc();
			    $exam_id=$r2['exam_id'];
			    $qry1="select username from staff where staff_id='$staff_id'";
			    $rslt1=$cn->query($qry1);
			    $r1=$rslt1->fetch_assoc();
			    $username=$r1['username'];
				$qry="update exam_set set type='$type',start_time='$stime',end_time='$etime',date='$dat',duration='$duration' where exam_id='$exam_id'";
				if($rslt=$cn->query($qry))
				{
					$qry1="select * from student";
					$rslt1=$cn->query($qry1);
					while($r1=$rslt1->fetch_assoc())
					{
						$email=$r1['email'];
						$username=$r1['username'];
						$to_email = $email;
						$subject = "CAMPUS TRAINEE LOGIN";
						$body = "ALERT
										The test will set on:".$dat."
										Type:".$type."
										Start Time:".$stime."
										End Time:".$etime."
										PLEASE TAKE TEST ON TIME";
						$headers = "From: campustraineee@gmail.com";
						if (mail($to_email, $subject, $body, $headers)) {
						   
						}
						$qry3="insert into noti values('$username','$staff_id','$type','$dat','$stime')";
						$rslt3=$cn->query($qry3);
					}
					echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Test Added',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='staffinterface.php?staff_id=".$staff_id."' })</script>";
				}
			}
	echo'</body>
</html>';
} 
if(isset($_POST['cancel']))
{
	
	$qry2="select exam_id from exam_set order by exam_id desc limit 1";
	$rslt2=$cn->query($qry2);
	$r2=$rslt2->fetch_assoc();
  $exam_id=$r2['exam_id'];
  $qry="delete from exam_set where exam_id='$exam_id'";
  $rslt=$cn->query($qry);
  if($rslt){
  	echo'<script>window.location.href="add_test.php?staff_id='.$staff_id.'&&type='.$type.'";</script>';
  }
}
?>