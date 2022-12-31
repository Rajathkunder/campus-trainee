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
  <link rel=stylesheet type=text/css href=Resume2_style.css>
</head>
<body>
  <div class=maindiv>

<div class=mydiv>
  <div class=img1>
    <img src='images/".$r['image']."'>
</div>
<center><h1 class=name>".$fname." ".$lname."</h1></center>
<h3 class=em>Email :</h3>
<p class=p1>".$mail."</p>
<h3 class=ph>Phone  :</h3>
<p class=p2>".$phone."</p>
<h3 class=ph1>LinkedIn  :</h3>
<p class=p3>".$url."</p>
</div><hr>
<div class=nxtdiv>
 <br> <h2 class=pi><u>Personal Info</u></h2>
 <h3 class=ad> Address       : </h3>
 <p class=pp1>".$add."</p>
 <h3 class=ad1>Date of Birth : </h3>
 <p class=pp2>".$dob."</p>
 <h3 class=ad2>Nationality   : </h3>
 <p class=pp3>".$nation."</p><br><br><br><br><br><br>
 <hr>
  <h2 class=pi1><u>Languages</u></h2>
  <ul class=lang>";
 $lang1=strtok($lang,",");
      while($lang1!="")
      {
        echo"<h3><li>".$lang1."</li></h3>";
        $lang1=strtok(",");
      }
        echo"</ul>
<br><br><br><br><br><br>
<hr>
 <h2 class=pi2><u>Hobbies</u></h2>
  <ul class=lang1>
 <ul>";
          $hobbi1=strtok($hobbi,",");
          while($hobbi1!="")
          {
            echo"<h3><li>".$hobbi1."</li></h3>";
            $hobbi1=strtok(",");
          }
        echo"</ul>";
echo"</ul> <br><br><br><br><br><br>
<hr>
<h2 class=pi3><u>Objective</u></h2>
<h3 class=obj>".$objective."</h3><br><br><br><br><br><br>
<hr>
<h2 class=pi4><u>Education</u></h2>
<h3 class=dur><u>Duration</h3>
  <h3 class=dur1><u>Course</u></h3>
  <h3 class=dur2><u>University/Institution</u></h3>
     <h3 class=dur3><u>Percentage</u></h3>

  <p class=y1>".$year1."</p>
   <p class=y2>".$year2."</p>

 <p class=y3>".$year3."</p>

<p class=c1>".$course1."</p>
<p class=c2>".$course2."</p>
<p class=c3>SSLC</p>

<p class=u1>".$university1."</p>
<p class=u2>".$university2."</p>
<p class=u3>".$university3."</p>

<p class=m1>".$perc1."</p>
<p class=m2>".$perc2."</p>
<p class=m3>".$perc3."</p><br><br><br><br><br><br><br><br>

<hr>

<h2 class=pi5><u>Skills</u></h2>
<ul class=lang2>";
 $skill1=strtok($skill,",");
          while($skill1!="")
          {
            echo"<h3><li>".$skill1."</li></h3>";
            $skill1=strtok(",");
          }
          echo"
        </ul>
</ul>  <br><br><br><br><br><br>
<hr>

<h2 class=pi6><u>Certifications</u></h2>
<ul class=lang3>";
 $cert1=strtok($cert,",");
          while($cert1!="")
          {
            echo"<h3><li>".$cert1."</li></h3>";
            $cert1=strtok(",");
          }
          echo"
        </ul>  <br><br><br><br><br><br>
<hr>
<h2 class=pi7><u>Declaration</u></h2>
<h3 class=dec>I hereby declare that all the information provided above is accurate to the best of my knowledge.</h3>
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
  <button class="button2" onclick=window.location.href="new_exist_resume2.php?username='.$username.'">Back</button>
  <p>Could not find your resume. Please click on the create resume button</p>
      <button class="button1" onclick=window.location.href="Resume2_form.php?username='.$username.'">CREATE NEW RESUME</button>
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