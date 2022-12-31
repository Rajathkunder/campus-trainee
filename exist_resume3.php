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
			<title></title>
			<link rel=stylesheet type=text/css href=css/style.css>
			<style>

				:root{
		    --bgcolor:#beb8ac;
		    --blue:#0b83c4;
		    --black:#3D3F42;
		    --white:#f4f7ff;
		    --gray:#d8dce4;
		    --lightgray:#8e9095;
		}
		*{
		    margin: 0px;
		    padding: 0px;
		    box-sizing: border-box;
		    font-family: monospace;
		}
		body{
		    background: var(--bgcolor);
		}
		.clearfix{clear: both;}
		.resume-box{
		    width: 900px;
		    height: 1050px;
		    margin: 30px auto;
		    background: var(--white);
		    box-shadow: 5px 21px 20px 20px #3df4238;
		    margin-top: 70px;
		}
		.left-section{
		    background: var(--blue);
		    width: 250px;
		    height: 1050px;
		    float: left;
		}
		.profile{
		    overflow: hidden;position: relative;
		}
		.blue-box{
		    width: 257px;
		    height: 407px;
		    background: var(--blue);
		    margin-left: -100px;
		    transform: rotateZ(48deg);
		    margin-top: -178px;
		}
		.profile-img{
		    position: absolute;
		    z-index: 9;
		    width: 120px;
		    height: 120px;
		    transform: translate(-50%, -50%);
		    left: 50%;
		    top: 50%;
		    border-radius: 50%;
		    border: 3px solid var(--gray);
		}
		.name{
		    color: var(--gray);
		    text-align: center;
		    margin-top: -34px;
		    font-size: 25px;
		    font-weight: 400;
		    text-transform: uppercase;
		}
		.name span{color:var(--white);}
		.n-p{
		    width: 180px;
		    margin: 0 auto;
		    text-align: center;
		    padding: 7px;
		    border-bottom: 1px solid var(--gray);
		    border-top:1px solid var(--gray);
		    color: var(--black);
		    background: var(--white);
		    margin-top: 11px;
		    text-transform: uppercase;
		}
		.info{
		    margin-top: 50px;
		}
		.heading{
		    width: 230px;
		    margin-left: 20px;
		    padding: 5px;
		    padding-left: 15px;
		    border-bottom: 1px solid var(--gray);
		    border-top:1px solid var(--gray);
		    color:var(--blue);
		    background: var(--white);
		    margin-top: 11px;
		    text-transform: uppercase;
		    font-size: 18px;
		    border-radius: 10px 0px 0px 10px; 
		}
		.p1{
		    color: var(--gray);
		    width: 184px;
		    margin: 0 auto;
		    margin-top: 25px;
		    font-size: 15px;
		    line-height: 14px;
		}
		.p1 span{font-size: 12px;}
		.span1 img{
		    background: white;
		    width: 30px;
		    padding: 6px;
		    border-radius: 16px;
		    float: left;
		    margin-right: 10px;
		}
		.right-section{
		    padding: 40px 30px;
		    background: var(--white);
		    width: 68%;
		    float: left;
		    height: 1050px;
		}
		.right-heading img{
		    background:var(--blue);
		    width: 36px;
		    padding: 7px;
		    border-radius: 17px;
		    float: left;
		    display: inline-block;
		    margin-top: -2px;
		}
		.p2{
		    margin: 0 auto;
		    padding: 6px;
		    border-bottom: 1px solid var(--lightgray);
		    border-top: 1px solid var(--lightgray);
		    color: var(--white);
		    background: var(--blue);
		    text-transform: uppercase;
		    font-size: 17px;
		    margin-left: 26px;
		    font-weight: bold;
		    line-height: 18px;
		    padding-left: 20px;
		}
		.p3{
		    margin-top: 20px;
		    color: var(--lightgray);
		    text-align: justify;
		    word-spacing: -4px;
		}
		.left{width: 25%; float: left;}
		.right{width: 75%; float: left;}
		.right1{width: 75%; float: left;}
		.lr-box{margin-top: 20px; margin-bottom: 20px; width: 100%;}
		.p4{font-size: 14px; font-weight: 600; margin-left: 16px}
		.p5{font-size: 12px; color: var(--lightgray);}
		.s-box{
		    width: 50%; float: left; padding: 20px 20px 20px 0px;
		}
		#progress{
		    background: #333;
		    border-radius: 13px;
		    height: 8px;
		    width: 100%;
		}
		#progress:after{
		    content: '';
		    display: block;
		    background: var(--blue);
		    width: 50%;
		    height: 100%;
		    border-radius: 9px;
		}
		#progress1{
		    background: #333;
		    border-radius: 13px;
		    height: 8px;
		    width: 100%;
		}
		#progress1:after{
		    content: '';
		    display: block;
		    background: var(--blue);
		    width: 40%;
		    height: 100%;
		    border-radius: 9px;
		}

		#progress2{
		    background: #333;
		    border-radius: 13px;
		    height: 8px;
		    width: 100%;
		}
		#progress2:after{
		    content: '';
		    display: block;
		    background: var(--blue);
		    width: 80%;
		    height: 100%;
		    border-radius: 9px;
		}

		#progress3{
		    background: #333;
		    border-radius: 13px;
		    height: 8px;
		    width: 100%;
		}
		#progress3:after{
		    content: '';
		    display: block;
		    background: var(--blue);
		    width: 90%;
		    height: 100%;
		    border-radius: 9px;
		}
		.p6{margin-top:10px; margin-bottom:10px;}
		.h-img{
		    margin-top: 25px;
		    width: 45px;
		    margin-right: 45px;
		}
			</style>

		</head>
		<body>

		<div class=resume-box>
			<div class=left-section>
				<div class=profile>
					<img src='images/".$r['image']."' class=profile-img>
					<div class=blue-box></div>
				</div>
				<h2 class=name>".$fname." ".$lname."<br></h2>
				

				<div class=info>
					<p class=heading>Info</p>
					<p class=p1>Address<span><br>".$add."</span></p>
					<p class=p1>Phone<span><br>".$phone."</span></p>
					<p class=p1>Email<span><br>".$mail."</span></p>
					<p class=p1></span>DOB<span><br>".$dob."</span></p>
					<p class=p1></span>LinkedIn<span><br>".$url."</span></p>
					<p class=p1></span>Nationality<span><br>".$nation."</span></p>
				</div>

				<div class=info>
					<p class=heading>Languages</p><br><br>
					";
								$lang1=strtok($lang,",");
								while($lang1!="")
								{
									echo"&nbsp;&nbsp;<h3 class=p4>".$lang1."</h3><br>";
									$lang1=strtok(",");
								}
						echo"
				</div>

			</div>

			<div class=right-section>
				<div class=right-heading>
					
					<p class=p2>DEclaration</p>

				</div>
				<p class=p3>
					Lorem Ipsum is simply dummy text of the printing and typesetting industruy.Lorem Ipsum is simply dummy text of the printing and typesetting industruy.Lorem Ipsum is simply dummy text of the printing and typesetting industruy.
				</p>
				<div class=clearfix></div>
				<br><br>
				<div class=right-heading>
					
					<p class=p2>Objective</p>

				</div>
				<p class=p3>
					".$objective."
				</p>
				<div class=clearfix></div>
				<br><br>
				<div class=right-heading>
					
					<p class=p2>Education</p>
				</div>
				<div class=clearfix></div>

				<div class=lr-box>
					<div class=left>
						<p class=p4>".$year1."</p>
						</div>
					<div class=right>
						<p class=p4>".$university1."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$perc1."</p>
						
					</div>
					<div class=clearfix></div>
				</div>

				<div class=lr-box>
					<div class=left>
						<p class=p4>".$year2."</p>
						
					</div>
					<div class=right>
						<p class=p4>".$university2."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$perc2."</p>
						
					</div>
					<div class=clearfix></div>
				</div>

				<div class=lr-box>
					<div class=left>
						<p class=p4>".$year3."</p>
						
					</div>
					<div class=right>
						<p class=p4>".$university3."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$perc3."</p>
						

					</div>
					<div class=clearfix></div>
				</div>

				<div class=right-heading>
					
					<p class=p2>Certifications</p>
				</div>
				

				<div class=lr-box>
					<div class=left>";
					$cert1=strtok($cert,",");
							while($cert1!="")
							{
								echo"<h3>".$cert1."</h3><br>";
								$cert1=strtok(",");
							}			
							echo"
					</div>
					
					<div class=clearfix></div>
				</div>
				<div class=right-heading>
					
					<p class=p2>Skills</p>
				</div>
				<div class=clearfix></div>

				<div class=s-box>";
							$skill1=strtok($skill,",");
							while($skill1!="")
							{
								echo"<h3>".$skill1."</h3><br>";
								$skill1=strtok(",");
							}
							echo"
							
				</div>

				<div class=clearfix></div>
				<br>
				<div class=right-heading>
					
					<p class=p2>Hobbies</p>
				</div>
				<div class=clearfix></div><br>";
				$hobbi1=strtok($hobbi,",");
							while($hobbi1!="")
							{
								echo"<h3>".$hobbi1."</h3><br>";
								$hobbi1=strtok(",");
							}
						echo"
			</div>
			<div class=clearfix></div>
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
			<button class="button2" onclick=window.location.href="new_exist_resume3.php?username='.$username.'">Back</button>
		  <p>Could not find your resume. Please click on the create resume button</p>
					<button class="button1" onclick=window.location.href="Resume3_form.php?username='.$username.'">CREATE NEW RESUME</button>
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