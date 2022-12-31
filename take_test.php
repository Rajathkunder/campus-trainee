<?php 
$username=$_GET['username'];
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
$qry="select name from student where username='$username'";
$rslt=$cn->query($qry);
$r=$rslt->fetch_assoc();
$name=$r['name'];
$qry1="select *from noti where username='$username'";
$rslt1=$cn->query($qry1);
$count=0;
while($rslt1->fetch_assoc()) {
	$count=$count+1;
}
echo'
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title></title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
	*{
	list-style: none;
	text-decoration: none;
	padding: 0;
	margin: 0;
	color:white;
}
body{
	background-color: black;
}
.sidebar{
	position: fixed;
	left: -255px;
	width: 250px;
	height: 100%;
	background: #042331;
	transition: all .5s ease;
	margin-top: 0px;
}
.sidebar header{
	font-size: 22px;
	color: white;
	text-align: center;
	line-height: 70px;
	background: #063146;
	user-select: none;
	transition: all .5s ease;
}
.sidebar a{
	display: block;
	height: 100%;
	width: 100%;
	line-height: 65px;
	font-size: 20px;
	color: white;
	padding-left: 40px;
	box-sizing: border-box;
	border-top: 1px solid rgba(255, 255, 2555, .1);
	border-bottom: 1px solid black;
}
li:hover{
	padding-left: 20px;
}
#check1{
	display: none;
}

label #btn, label #btn2{
	position: absolute;
	cursor: pointer;	
	background: #042331;
	border-radius: 3px;
}
label #btn{
	left: 15px;
	top: 8px;
	font-size: 35px;
	color: white;
	padding: 6px 12px;
	transition: all .5s ease;

}
label #btn2{
	z-index: 1111;
	left: -195px;
	top: 17px;
	font-size: 30px;
	color: white;
	padding: 4px 9px;
	transition: all .5s ease;
}
	
#check1:Checked ~ .sidebar{
	left: 0;
}
#check1:Checked ~ label #btn{
	left: 250px;
	opacity: 0;
	pointer-events: none;
}
#check1:Checked ~ label #btn2{
	left: 195px;
	
}
h1{
	text-transform: uppercase;
	text-align: right;
	font-family: sans-serif;
	font-size: 25px;
	padding-right: 100px;
	padding-top: 20px;
	color: white;
}
.nam{
	background: #063133;
	height: 70px;
}
.icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  color: black;
  background: #5858f4;
  border: none;
  outline: none;
  border-radius: 50%;
  left:95%;
  top:-35px;
}

.icon-button:hover {
  cursor: pointer;
}

.icon-button:active {
  background: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: -7px;
  right: -7px;
  width: 28px;
  height: 28px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}
.msgb{
	color:white;
	font-size:30px;
	padding-left:250px;
	padding-top:100px;
}
.nam{
	background: #063133;
	height: 70px;
}
.welcome{
	text-align: center;
	font-size: 80px;
	padding-top: 130px;
	cursor: pointer;
	color: blue;
}
.icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  color: black;
  background: #5858f4;
  border: none;
  outline: none;
  border-radius: 50%;
  left:89%;
  top:-35px;
}

.icon-button:hover {
  cursor: pointer;
}

.icon-button:active {
  background: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: -7px;
  right: -7px;
  width: 28px;
  height: 28px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}
 #check2{
      
  display: none;
}
    
    .lbl1{
      margin-left: 93%;
      color:white;
      top:-35px;
    }
    .lbl1{
    	position:relative;
    	top:-55px;
    	left:;
    }
    .support{
    	font-size:20px;
    }
    .msg{
      position: fixed;
      height: 600px;
      right: -350px;
      width: 360px;
      top: -600px;
      background-color: #031947;
      color: white;
      border-radius: 10px;
      border: 1px solid black;
      transition: all .5s cubic-bezier(0.18, 0.89, 0.32, 1.28);
    }
    .msgbox{
      height: 550px;
      width: 360px;
      background-color: #031947;
      color: white;
      border-radius: 10px;
      overflow-y: scroll;
    }
    #talkbubble1 {
      margin-top: 20px;
      min-width: 0px;
      max-width: 230px;
      min-height: 50px;
      background: red;
      position: relative;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      margin-left: 30px;
      align-content: center;
      text-align: center;
    }
     #talkbubble2 {
      margin-top: 20px;
      left: 40px;
      min-width: 0px;
      max-width: 230px;
      min-height: 50px;
      background: red;
      position: relative;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      margin-left: 30px;
      align-content: center;
      text-align: center;
    }
    #talkbubble1:before {
      content: "";
      position: absolute;
      right: 100%;
      top: 10px;
      width: 0;
      height: 0;
      border-top: 13px solid transparent;
      border-right: 26px solid red;
      border-bottom: 13px solid transparent;
    }
    #talkbubble2:after {
      content: "";
      position: absolute;
      left: 229px;
      top: 10px;
      width: 0;
      height: 0;
      border-top: 13px solid transparent;
      border-left: 26px solid red;
      border-bottom: 13px solid transparent;
    }
    .fnt{
      font-size: 18px;
    }
    .msgtext{
      height: 44px;
      width: 280px;
      font-size: 18px;
      border-radius: 10px;
    }
    .send{
      height: 44px;
      width: 65px;
      border-radius: 10px;
    }
    #check2:Checked ~ .msg{
      right: 0px;
      top: 68px;

    }
    .nn{
    	padding-right:200px;
    }

</style>
</head>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<input type=checkbox id=check1>
	<label for=check1>
		<i class="fas fa-bars" id=btn></i>
		<i class="fas fa-times" id=btn2></i></label>
	<div class=sidebar>
		<header>My App</header>
		<ul>
		<li><a href="student_interface.php?username='.$username.'">Dashboard</a></li>
			<li><a href="myprofile.php?username='.$username.'">Profile</a></li>
			<li><a href="choosingtemplate.php?username='.$username.'">Generate Resume</a></li>
			<li><a href="take_test.php?username='.$username.'">Take Test</a></li>
			<li><a href="stud_result.php?username='.$username.'">View Result</a></li>
			<li><a href="login.php">Logout</a></li>
		</ul>
	</div>
	<div class="nam"><h1 class="nn">'.$name.'</h1><button onclick=window.location.href="notificationpage.php?username='.$username.'" type="button" class="icon-button">
    <span class="material-icons" style="font-size:30px;">notifications</span>
    <span class="icon-button__badge">'.$count.'</span></span>
  </button></div>
  <input type=checkbox id=check2>
  <label for=check2 class="lbl1">
    <b class="support">support</b>&nbsp;<i class="fas fa-question-circle" style="font-size:28px;color:red"></i></label>
  <div class="msg">
  <div class="msgbox">';
  $qry2="select * from stud_support where username='$username'";
$rslt2=$cn->query($qry2);
  while($r2=$rslt2->fetch_assoc())
  {
  		if($r2['send']!="")
  		{
  			echo'
      	<div id="talkbubble2"><p class="fnt">'.$r2['send'].'</p></div>';
  		}
  		if($r2['replay']!="")
  		{
  			echo'
  			<div id="talkbubble1"><p class="fnt">'.$r2['replay'].'</p></div>';

			}
	}
echo'


</div>
<form method="POST" action="send.php?username='.$username.'">
  <input type="text" name="send" class="msgtext" name="">
  <input type="submit" name="submit" class="send" value="send">
  </form>
</div>';
  echo'<div class="msgb"><p>There is no test..............</p></div>';
	$qry1="select * from exam_set";
	$rslt1=$cn->query($qry1);
	while($r1=$rslt1->fetch_assoc())
	{
		date_default_timezone_set('Asia/Kolkata');
		$date=$r1['date'];
		$stime=$r1['start_time'];
		$etime=$r1['end_time'];
		$ptime=date("H:i");
		$today=date("Y-m-d");
		$exam_id=$r1['exam_id'];
		if($date==$today)
		{
			$stim=explode(":", $stime);
			$stime=$stim[0]*60;
			$stime=$stime+$stim[1];
 
			$etim=explode(":", $etime);
			$etime=$etim[0]*60;
			$etime=$etime+$etim[1];

			$ptim=explode(":",$ptime);
			$ptime=$ptim[0]*60;
			$ptime=$ptime+$ptim[1];
			if($stime>$etime)
			{
				$etime=$etime+1440;
			}
			if($ptime>=$stime&&$ptime<=$etime)
			{
				$qry="select * from exam_set where exam_id='$exam_id'";
    $rslt=$cn->query($qry);
    $r=$rslt->fetch_assoc();
    $type=$r['type'];
    $duration=$r['duration'];
    $date=$r['date'];
    $count=0;
    $qry1="select * from selected_questions where exam_id='$exam_id'"; 
    $rslt1=$cn->query($qry1);
    while($r1=$rslt1->fetch_assoc()){
    	$count=$count+1;

		}
		$qry2="select * from result where exam_id='$exam_id'";
		$rslt2=$cn->query($qry2);
		
				echo'<script>window.location.href="testwindow.php?username='.$username.'&&exam_id='.$exam_id.'"</script>';
			}
			else
			{
			}
		}
		else
		{		
		}
	}

	echo'
</body>
</html>';
?>
