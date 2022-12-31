<?php
$username=$_GET['username'];
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
$qry="select * from resume where username='$username'";
$rslt=$cn->query($qry);
if($rslt->num_rows>0)
{
		$r=$rslt->fetch_assoc();
		$fname=$r['fname'];
		$lname=$r['lname'];
		$add=$r['add1'];
		$dob=$r['dob'];
		$phone=$r['phone'];
		$mail=$r['mail'];
		$url=$r['url'];
		$nation=$r['nation'];
		$lang=$r['lang'];
		$hobbi=$r['hobbi'];
		$objective=$r['objective'];
		$year1=$r['year1'];
		$course1=$r['course1'];
		$university1=$r['university1']; 
		$perc1=$r['perc1'];
		$year2=$r['year2'];
		$course2=$r['course2'];
		$university2=$r['university2']; 
		$perc2=$r['perc2'];
		$year3=$r['year3'];
		$perc3=$r['perc3'];
		$university3=$r['university3']; 
		$skill=$r['skill'];
		$cert=$r['cert'];
		echo"
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset=utf-8>
			<title></title>
			<link rel=stylesheet type=text/css href=Resume1_style.css>
		</head>
		<body>
			<div class=container1>
				<div class=leftside>
					<div class=profileText>
						<div class=imgBx>
							<img src='images/".$r['image']."'>
						</div>
						<h1>".$fname." ".$lname."</h1>
					</div>
					<div class=contact>
						<h2>Personal Info</h2>
					</div>
					<ul claaa=title>
						<li>
							<span class=text>Address:-".$add."</span>
						</li>
						<li>
							<span class=text>DOB:-".$dob."</span>
						</li>
						<li>
							<span class=text>Phone:-".$phone."</span>
						</li>
						<li>
							<span class=text>Email:-".$mail."</span>
						</li>
						<li>
							<span class=text>Linkedin:-".$url."</span>
						</li>
						<li>
							<span class=text>Nationality:-".$nation."</span>
						</li>
					</ul>
					
					<h2 class=contact>Language</h2>
					<div class=language><ul>";
					$lang1=strtok($lang,",");
					while($lang1!="")
					{
						echo"<li>".$lang1."</li>";
						$lang1=strtok(",");
					}
						echo"</ul>
					</div>
					<h2 class=contact>Hobbies</h2>
					<div class=language>
						<ul>";
							$hobbi1=strtok($hobbi,",");
							while($hobbi1!="")
							{
								echo"<li>".$hobbi1."</li>";
								$hobbi1=strtok(",");
							}
						echo"</ul>	
						</ul>
					</div>
				</div>
				<div class=rightside>
					<h2>Objective</h2>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;".$objective."</p>
					<h2>Education</h2>
					<div class=education>
						<ul>
							<li><h4>".$year1."</h4>
								<h3>".$course1."</h3>
								<h3>".$university1."</h3>
								<h3>".$perc1."</h3>
							</li>
							<li><h4>".$year2."</h4>
								<h3>".$course2."</h3>
								<h3>".$university2."</h3>
								<h3>".$perc2."</h3>
							</li>
							<li><h4>".$year3."</h4>
								<h3>".$university3."</h3>
								<h3>".$perc3."</h3>
							</li>
						</ul>

					</div>
					<h2>Skills</h2>
					<div class=skill>
						<ul>";
							$skill1=strtok($skill,",");
							while($skill1!="")
							{
								echo"<li>".$skill1."</li>";
								$skill1=strtok(",");
							}
							echo"
						</ul>
						
					</div>
					<h2>Certification</h2>
					<div class=skill>
						<ul>";
						$cert1=strtok($cert,",");
							while($cert1!="")
							{
								echo"<li>".$cert1."</li>";
								$cert1=strtok(",");
							}
							echo"
						</ul>
					</div>
					<h2>Declaration</h2>
					<p> &nbsp;&nbsp;&nbsp;&nbsp;I hereby declare that the above information is true and correct to the best of my knowledge and belief.</p>
				</div>
			</div>
		</body>
		</html>";
}
else
{
			echo'<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-color: black;
		}
		.animate-bottom{
			 background: rgb(35, 51, 64);
			margin: 50px;
			height: 630px;
		}
		.animate-bottom p{
			color: red;
			font-size: 40px;
			font-family: sans-serif;
			text-align: center;
			padding-top: 150px;
			border-radius: 95px;
		}
		.animate-bottom button
		{
			
			position: ;
			color: white;
			font-size: 15px;
			border-radius: 10px; 
		cursor:pointer;		  
		} 
		.button1{
			background:transparent;
  border:5px outset ;
			left: 620px;
			top: 350px;
			height: 90px;
			width: 200px;

		}
		.button2
		{
			background:transparent;
  border:5px outset ;
			position: relative;
			margin-top: 10px;
			margin-right: 1270px;
			height: 60px;
			width: 100px;
		}
		
		#loader {
  position: absolute;
  opacity: o.1;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}




	</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
	<button class="button2" onclick=window.location.href="new_exist_resume1.php?username='.$username.'">Back</button>
  <p class=pp>Could not find your resume. Please click on the create resume button</p>
			<button class="button1" onclick=window.location.href="Resume1_form.php?username='.$username.'">CREATE NEW RESUME</button>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>';
}
?>