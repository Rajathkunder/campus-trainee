<?php
$exam_id=$_GET['exam_id'];
$username=$_GET['username'];
session_start();
$_SESSION['username']=$username;
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    $nam="select name from student where username='$username'";
		$rsltn=$cn->query($nam);
		$rn=$rsltn->fetch_assoc();
		$name=$rn['name'];
    $qry1="select *from noti where username='$username'";
			$rslt1=$cn->query($qry1);
			$count=0;
			$count1=0;
			while($rslt1->fetch_assoc()) {
				$count=$count+1;
			}
			echo '<!DOCTYPE html>
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
	padding-right:100px;
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
*{
				color:white;
			}
			.container{
				background:rgb(35, 51, 64);
				border: 5px outset #696969;
				width:800px;
				margin-left:25%;
				margin-top:1%;
				height:320px;
			
				
			}
			h2{
				text-align:center;
				font-size:40px
			}
			h4{
				font-size:27px;
				margin-left:120px;
			}
			.btn1{
				position:absolute;
				width:140px;
				height:40px;
				background:transparent;
				border: 3px outset #696969;
				font-size:30px
				margin-left:240px;
				top:385px;
				left:700px
			}
			.p1{
				color:green;
				font-size:35px;
				margin-left:300px;
				margin-top:-20px;
			}
			tr{
				margin-left:50px;
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
    .btn{
    	background:transparent;
    	font-size:25px;
    	border: 5px outset #696969;
    	margin-left:300px;
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
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<div class="nam"><span class="not"><h1>'.$name.'</h1><button onclick=window.location.href="notificationpage.php?username='.$username.'" type="button" class="icon-button">
    <span class="material-icons" style="font-size:30px;">notifications</span>
    <span class="icon-button__badge">'.$count.'</span></span>
  </button></div><input type=checkbox id=check2>
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
</div>
			';
			$qry="select * from exam_set";
	    $rslt=$cn->query($qry);
	    while($r=$rslt->fetch_assoc()){
	    				date_default_timezone_set('Asia/Kolkata');
							$date=$r['date'];
							$stime=$r['start_time'];
							$etime=$r['end_time'];
							$ptime=date("H:i");
							$today=date("Y-m-d");
							$exam_id=$r['exam_id'];
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
									    $type=$r['type'];
									    $duration=$r['duration'];
									    $date=$r['date'];
									    
											$qry4="select * from selected_questions where exam_id='$exam_id'"; 
											$rslt4=$cn->query($qry4);
									    while($r4=$rslt4->fetch_assoc()){
									    	$count1=$count1+1;

											}
											$qry3="select * from result where exam_id='$exam_id' && username='$username'";
											$rslt3=$cn->query($qry3);
											if($rslt3->num_rows>0)
											{

												echo'
											<div class="container"><h2>TEST DETAILS</h2><table style="  border-spacing: 22px;">
											<tr><td><h4>Date</h4></td><td><h4>:'.$date.'</h4></td></tr>
											<tr><td><h4>Type</h4></td><td><h4>:'.$type.'</h4></td></tr>
											<tr><td><h4>Duration</h4></td><td><h4>:'.$duration.'</h4></td></tr>
											<tr><td><h4>Total questions</h4></td><td><h4>:'.$count1.'</h4></td></tr></table><br>
											<p class="p1">Already taken</p><br></div>';
											$count1=0;
										}
										else
										{

												echo'
											<div class="container"><h2>TEST DETAILS</h2><table  style="  border-spacing: 22px;">
											<tr><td><h4>Date</h4></td><td><h4>:'.$date.'</h4></td></tr>
											<tr><td><h4>Type</h4></td><td><h4>:'.$type.'</h4></td></tr>
											<tr><td><h4>Duration</h4></td><td><h4>:'.$duration.'</h4></td></tr>
											<tr><td><h4>Total questions</h4></td><td><h4>:'.$count1.'</h4></td></tr>
											<tr><td colspan=2><button class="btn" onclick=window.location.href="exam.php?username='.$username.'&&exam_id='.$exam_id.'">Take Test</button></td></tr></table><br></div>';
											$count1=0;
										}
									}//end of time comparision
							}//date comparision end
					}//while end
		echo'
  
</body>
</html>';
?>