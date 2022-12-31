<?php
session_start();
if(isset($_SESSION['username']))
{
$username=$_SESSION['username'];
//$username=$_GET['username'];
$exam_id=$_GET['exam_id'];
@$db=new mysqli('localhost','root','','campus');
$qry="select * from student where username='$username'";
$rslt=$db->query($qry);
$r=$rslt->fetch_assoc();
$qry1="select * from selected_questions where exam_id='$exam_id'";
$rslt1=$db->query($qry1);
$questions="";
while($r1=$rslt1->fetch_assoc())
{
	$qtn=$r1['question_id'];
	$questions=$questions.",".$qtn;
}
$total_question=array();
$count_question=0;
$question=strtok($questions,",");
			while($question!="")
			{
				array_push($total_question,$question);
				$question=strtok(",");
				$count_question=$count_question+1;
			}
			shuffle($total_question);
$count=0;
$selet="select * from exam_set where exam_id='$exam_id'";
$result=$db->query($selet);
$row=$result->fetch_assoc();
$time=$row['duration'];
$tim=$time*60;
$question_list="";
echo '<!DOCTYPE html>
<html>
<head>
 
	<title>take test</title>
	<style type="text/css">
		.d1{
			background-color: white;
			height: 80%;
			width: 100%;
			margin-top: 10px;
			overflow: scroll;
		}
		.d2{
			height: 280px;
			width: 100%;
			background-color:#FFE4E1;
			margin-top: 20px;
			margin-left: 15px;
			overflow: hidden;
		}
		h2{
			height: 30px;
			width: 20px;
			margin-left: 20px;
			margin-top: 37px;
			
			
			
			font-size: 20px;
		}
		p{
			height: 30px;
			width: 1400px;
			margin-left: 50px;
			margin-top:-50px;
			
			
			
			font-size: 20px;
		}
		.rad{
			margin-left: 0px;
			margin-top: 5px;
			font-size: 40px;
			 
		}
		.rad:hover,
.rad:focus-within {
  background: hsla(0, 0%, 80%, .14);
}
		h3{

			margin-left: 23px;
			margin-top: -22px;
		}
		.op{
			margin-top: 10px;
			height: 160px;
			width: 400px;
			background-color: lightblue;
			margin-left: 85px;
			background-color: transparent;
		}
		.btn{
			height:40px;
			width:120px;
			margin-left:1300px;
			margin-top:10px;
			background-color:lightblue;
			border-radius:10px;
		}
		.btn:hover{
			background-color:blue;
		}
		.d11{
			height:120px;
			width:100%;
			background-color:#FFE4E1;
			
			margin-top:10px;
		}
		.im{
			height:140px;
			width:140px;
			margin-left:1290px;
			margin-top:1px;
			border-radius:120px;
		}
		.img{
height:140px;
			width:140px;
			border-radius:120px;
			
		}
		.circle {
  border: 2px solid #545556;
  border-radius: 50%;
  cursor: pointer;
  height: 20px;
  position: absolute;
  transition: border-color 300ms;
  width: 20px;
}
		.det{
			
margin-left:-130px;
margin-top:-110px;
font-size:22px;
font-family: Monospace;		}
.det1{
			
margin-left:-670px;
margin-top:-120px;
font-size:16px;
font-family: Monospace;		}
.det11{
	text-align:center;		
margin-left:-690px;
margin-top:20px;
font-size:40px;
font-family: Monospace;	
background-color:red;
width:200px;	}

.det111{
			
margin-left:-1260px;
margin-top:-110px;
font-size:40px;
font-family: Monospace;	

}
.det1111{
			
margin-left:-1260px;
margin-top:10px;
font-size:24px;
font-family: Monospace;	

}
#container {
	
	height:140px;
			width:160px;
			border-radius:190px;
			margin-top:-8px;
}
#videoElement {
	height:140px;
			width:160px;
			border-radius:190px;
			margin-top:-8px;
}
.fullscreen{
		position: absolute;
		text-align: center;
		align-content: center;
		top: -850px;
		height: 100%;
		width: 100%;
		left: 0px;
		background: black;
	}
	.ok{
		height: 30px;
		width: 70px;
		background: green;
		font-size: 20px;
	}
	.cancel{
		height: 30px;
		width: 72px;
		background: red;
		font-size: 20px;
	}
	.btn2{
		position:;
		margin-left: -300px;
		margin-top: 50px;
		font-size: 20px;
		background: red;
		border-radius: 10px;
	}
	#check1{
		display: none;
	}
	#check1:Checked ~ .fullscreen{
	top: 0px;
}
.fullmsg{
	background: white;
	height: 140px;
	width: 340px;
	text-align: center;
	margin-left: 600px;
	margin-top: 300px;
}
.p{
	margin-top: 50px;
	font-size: 20px;
}

	</style>

</head>
<body id="appin" onload="msg();">
<input type=checkbox id=check1>
	<label for=check1>
		</label>
		<div class="fullscreen">
			<div class="fullmsg">
				<span class="p">Plese make fullscreen</span><br><br>
			<button class="ok" onclick="fullscreen();">Ok</button>
			<button class="cancel" onclick="">Cancel</button>
		</div>
		</div>
<div class="d11">


<div class="im">

<div id="container">
	<video autoplay="true" id="videoElement">
	
	</video>
</div><h3 class="det">'.$r['name'].'<br>'.$r['class'].'<br>'.$r['regino'].'</h3><h3 class="det1">Time remaining: </h3><h1 class="det11" id="timer" data-hours="0" data-minutes="'.$time.'" data-seconds="0">
<h1 class="det111">VERBAL</h1><h3 class="det1111">IDIOMS AND PHRASES </h3>
</div>
</div>
<div class="d1">
<form method="POST" name="gg" id="gg" action="">
';
for($i=0;$i<$count_question;$i++){
									$question_id=$total_question[$i];
									$question_list=$question_list.$question_id.",";
									$temp=$total_question[$i];
									//echo $total_question;
									$qry2="select * from exam where question_id='$temp'";
									$rslt2=$db->query($qry2);
									$r2=$rslt2->fetch_assoc();
										$a=$i+1;
										$name="name".$count;
									echo '<div class="d2"><h2>Q.'.$a.'</h2><p>&nbsp;'.$r2['description'].'</p><br>
								<div class="op">
								<label><input type="radio" value="a" class="rad" name='.$name.'><h3>'.$r2['option_a'].'</h3></label>
								<label><input type="radio" value="b" class="rad" name='.$name.'><h3>'.$r2['option_b'].'</h3></label>
								<label><input type="radio" value="c" class="rad" name='.$name.'><h3>'.$r2['option_c'].'</h3></label>
								<label><input type="radio" value="d" class="rad" name='.$name.'><h3>'.$r2['option_d'].'</h3></label><br></div></div>
								';
								$count=$count+1;
}

echo '<input type="hidden" name="question_list" value='.$question_list.'>

<button  class="btn" onclick="sub()" id="thebutton" value="SUBMIT TEST" name="submit">SUBMIT TEST</button>
</div>

<script type="text/javascript">

  //var time = <?php echo $tim?>; //safest solution
var elem = document.getElementById("appin");
var check = document.getElementById("check1");
function exit(){
	if (document.exitFullscreen) {
    document.exitFullscreen();
    check.checked=true;
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
    check.checked=true;
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
    check.checked=true;
  }
}
function msg(){
	
	if (document.exitFullscreen()) {
    
    check.checked=true;
  } else if (document.webkitExitFullscreen()) { /* Safari */
    
    check.checked=true;
  } else if (document.msExitFullscreen()) { /* IE11 */
   
    check.checked=true;
  }
}
function fullscreen() {
  
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
    check.checked=false;
  } else if (elem.webkitRequestFullscreen) { 
    elem.webkitRequestFullscreen();
    check.checked=false;
  } else if (elem.msRequestFullscreen) { 
    elem.msRequestFullscreen();
    check.checked=false;
  }

}

	time = '.$tim.';
interval = setInterval(function() {
    time--;
    
    if (time == 0) {
        // stop timer
        clearInterval(interval);
        // click
        document.getElementById("thebutton").click();            
    }
}, 1000)

    function sub(){
	document.getElementById("cartCheckout").submit();
}
var elem = document.getElementById("appin");
function openFullscreen() {
  
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { 
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { 
    elem.msRequestFullscreen();

  }
}
const oneSec = 1000,
      container = document.getElementById("timer");
let dataHours 	= container.getAttribute("data-hours"),
    dataMinutes = container.getAttribute("data-minutes"),
    dataSeconds = container.getAttribute("data-seconds"),
		timerEnd 		= container.getAttribute("data-timer-end"),
		timerOnEndMsg = "data-timer-end";
if (dataHours ==null||dataHours == null || dataHours == NaN) {
  dataHours = "0";
}
if (dataMinutes ==null||dataMinutes == null || dataMinutes == NaN) {
  dataMinutes = "0";
}
if (dataSeconds ==null||dataSeconds == null || dataSeconds == NaN) {
  dataSeconds = "0";
}
if (dataSeconds ==0&&dataMinutes == 0 && dataHours == 0) {
  window.location.href="final.html"
}
let hoursSpan = document.createElement("span"),
    minutesSpan = document.createElement("span"),
    secondsSpan = document.createElement("span"),
    separator1 = document.createElement("span"),
    separator2 = document.createElement("span"),
    separatorValue = ":",
    max = 59,
    s = parseInt(dataSeconds) > max ? max : parseInt(dataSeconds),
    m = parseInt(dataMinutes) > max ? max : parseInt(dataMinutes),
    h = parseInt(dataHours);
secondsSpan.classList.add("time");
minutesSpan.classList.add("time");
hoursSpan.classList.add("time");
separator1.classList.add("separator");
separator1.textContent = separatorValue;
separator2.classList.add("separator");
separator2.textContent = separatorValue;
checkValue = (value)=>{
  if (value < 10) {
    return "0" + value;
  } else {
    return value;
  }
}
hoursSpan.textContent = checkValue(dataHours);
minutesSpan.textContent = checkValue(dataMinutes);
secondsSpan.textContent = checkValue(dataSeconds);
timer = (sv,mv,hv)=>{
  s = parseInt(sv);
  m = parseInt(mv);
  h = parseInt(hv);
  if (s > 0) {
    return s -= 1;
  } else {
    s = max;
    if (m > 0) {
      return m -= 1;
    } else {
      m = max;
      if (h > 0) {
        return h -= 1;
      }
    }
  }
}

finished = ()=>{
  max = 0;
	let timerEnd = container.getAttribute(timerOnEndMsg);
	container.setAttribute(timerOnEndMsg, "true");
	if (timerEnd == null || timerEnd == null) {
		container.textContent = "timer-end";
	} else {
		container.textContent = timerEnd;
	}
}

counter = setInterval(()=>{

  if (h == 0 && m == 0 && s == 0) {
    clearInterval(counter, finished());
  }

  if (s >= 0) {
    timer(s,m,h);
    hoursSpan.textContent   = checkValue(h);
    minutesSpan.textContent = checkValue(m);
    secondsSpan.textContent = checkValue(s);
  }
}, oneSec);

let children = [hoursSpan, separator1, minutesSpan, separator2, secondsSpan];

for (child of children) {
  container.appendChild(child);
}
function getLocalStream() {
    navigator.mediaDevices.getUserMedia({video: true, audio: true}).then( stream => {
        window.localStream = stream;
        window.localAudio.srcObject = stream;
        window.localAudio.autoplay = true;
    }).catch( err => {
        console.log("u got an error:" + err)
    });
}

getLocalStream();
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}
  
</script>




</body>

</html>';
if(isset($_POST['submit']))
{
	for($i=0;$i<$count;$i++)
{

		$term='name'.$i;
		if(isset($_POST["$term"]))
		{
			$ans=$_POST["$term"];
			//$question_id=$total_question[$i];
			//$question_list=$question_list.$question_id.",";
			$answer=$answer.$ans.",";

    	}
    	else
    	{
    		$ans="n";
    		$answer=$answer.$ans.",";
    	}
}
$question_l=$_POST['question_list'];
//echo'<script>alert("'.$question_l.'")</script>';
$qry3="insert into student_ans values('$username','$exam_id','$question_l','$answer')";
$rslt3=$db->query($qry3);
echo'<script>window.location.href="exam_complete.php?username='.$username.'&&count='.$count.'&&exam_id='.$exam_id.'"</script>';
session_destroy();
}
}
else
{
	
}

?>