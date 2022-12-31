<?php
//$value=50;
$username=$_GET['username'];
//$staff_id=$_GET['staff_id'];
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    $qr="select name from student where username='$username'";
$rsl=$cn->query($qr);
$ry=$rsl->fetch_assoc();
$name=$ry['name'];
    $qry="select * from result where username='$username'";
    $rslt=$cn->query($qry);
    $qry1="select *from noti where username='$username'";
$rslt1=$cn->query($qry1);
$count=0;
while($rslt1->fetch_assoc()) {
	$count=$count+1;
}
    
echo '
<!DOCTYPE html>
<html>
<head>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title></title>
	<style type="text/css">
	*{
  list-style: none;
  text-decoration: none;
  padding: 0;
  margin: 0;
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


@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");
body {
	background: rgb(35, 51, 64);
}
h1 {
	font-family: "Open Sans";
	color: rgb(255, 255, 255);
	text-align: center;
	margin: 50px 0 -80px;
}
 {
	font-family: "Open Sans";
	color: rgb(255, 255, 255);
	margin: 50px 0 -80px;
	text-align: center;
	width: 100%;
	font-size: 12px;
	text-decoration: none;
}
#wrapper{
	position: relative;
	top: 80px;
	width: 404px;
}
.center {
	left: 50%;
	-webkit-transform: translate( -50% );
	-ms-transform: translate( -50% );
	transform: translate( -50% );
}


.progress{
	width: 200px;
	height: 280px;
}
.progress .track, .progress .fill{
	fill: rgba(0, 0, 0, 0);
	stroke-width: 3;
	transform: rotate(90deg)translate(0px, -80px);
}
.progress .track{
	stroke: rgb(56, 71, 83);
}
.progress .fill {
	stroke: rgb(255, 255, 255);
	stroke-dasharray: 219.99078369140625;
	stroke-dashoffset: -219.99078369140625;
	transition: stroke-dashoffset 1s;
}
.progress.blue .fill {
	stroke: rgb(104, 214, 198);
}
.progress.green .fill {
	stroke: rgb(186, 223, 172);
}
.progress .value, .progress .text {
	font-family: "Open Sans";
	fill: rgb(255, 255, 255);
	text-anchor: middle;
}
.progress .text {
	font-size: 12px;
}
.noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
		cursor: pointer;
}
	.d1{
		height:240px;
		width:200px;
		background-color:lightblue;
		margin-left:900px;
		margin-top:-267px;
		background:transparent;
		
	}

.d{
		height:260px;
		width:800px;
		background-color:lightblue;
		margin-left:340px;
		margin-top:30px;
		border: 5px outset #696969;
		border-radius:10px;
		background:transparent;
		cursor: pointer;
		
		
	}
	.d2{
		height:220px;
		width:500px;
		background-color:lightblue;
		margin-left:6px;
		margin-top:8px;
		background:transparent;
		
		
	}
	p{
		font-family: "Open Sans";
	color: rgb(255, 255, 255);
	font-size:20px;
	margin-top:1px;
	margin-left:40px;
	}
.bt{
	height:50px;
	width:80px;
	background:transparent;
	color:lightblue;
	font-size:20px;
	border: 5px outset #696969;
		border-radius:10px;

}
.nam{
	background: #063133;
	height: 70px;
	margin-top:-47px;
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
  top:53px;
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



	</style>
	<script>
	var forEach = function (array, callback, scope) {
	for (var i = 0; i < array.length; i++) {
		callback.call(scope, i, array[i]);
	}
};
window.onload = function(){
	var max = -219.99078369140625;
	forEach(document.querySelectorAll(".progress"), function (index, value) {
	percent = value.getAttribute("data-progress");
		value.querySelector(".fill").setAttribute("style", "stroke-dashoffset: " + ((100 - percent) / 100) * max);
		value.querySelector(".value").innerHTML = percent + "%";
	});
}

</script>
</head>
<body>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <input type=checkbox id=check1>
  <label for=check1>
    <i class="fas fa-bars" id=btn></i>
    <i class="fas fa-times" id=btn2></i></label>
  <div class=sidebar>
    <header>STUDENT</header>
    <ul>
     <li><a href="student_interface.php?username='.$username.'">Dashboard</a></li>
      <li><a href="myprofile.php?username='.$username.'">Profile</a></li>
      <li><a href="choosingtemplate.php?username='.$username.'">Generate Resume</a></li>
      <li><a href="take_test.php?username='.$username.'">Take Test</a></li>
      <li><a href="stud_result.php?username='.$username.'">View Result</a></li>
      <li><a href="login.php">Logout</a></li>
    </ul>
  </div>
  <div class="nam"><span class="not"><h1>'.$name.'</h1><button onclick=window.location.href="notificationpage.php?username='.$username.'" type="button" class="icon-button">
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
</div>
';
if($rslt->num_rows==0){
  echo'<h1>There is no result</h1>';
}
else
{


while($r=$rslt->fetch_assoc()){
	$type=$r['type'];
	$exam_id=$r['exam_id'];
	$no_qsn=$r['no_qsn'];
	$noqsn_att=$r['noqsn_att'];
	$per=$r['percentage'];
	$right_ans=$r['right_answer'];
	$qry1="select * from exam_set where exam_id='$exam_id'";
	$rslt1=$cn->query($qry1);
	$r1=$rslt1->fetch_assoc();
	
echo'<div class=d>
<table style="  border-spacing: 19px; ">
<tr><td><p>TEST TYPE</p></td>            			<td><p>:</p></td><td><p>  '.$type.'</p></td></tr>
<tr><td><p>TEST ID   </p> </td>          		<td>	<p>:</p></td><td><p>  TEST-'.$exam_id.'</p></td></tr>
<tr><td><p>TEST DATE </p></td>             		<td><p>:</p> </td> <td><p>'.$r1['date'].'</p></td></tr>
<tr><td><p>NUMBER OF QUESTIONS</p> </td> <td>	<p>:</p></td><td><p>  '.$no_qsn.'</p></td></tr>
<tr><td><p>N0. OF QUESTIONS ATTENDED</p> </td> <td> <p>:</p></td><td><p>  '.$noqsn_att.'</p></td></tr>
<tr><td><p>CORRECT ANSWERS  </p></td>   <td> 	<p>:</p> </td><td><p> '.$right_ans.'</p></td></tr></table>
</div>
	<div class=d1>
	<svg class="progress blue noselect" data-progress="'.$per.'" x="0px" y="0px" viewBox="0 0 80 80">
		<path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
		<path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
		<text class="value" x="50%" y="55%">0%</text>

	</svg>
	</div>
</div><br>';
}
}
echo'
</body>
</html>';
?>