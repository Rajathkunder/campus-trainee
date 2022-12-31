<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Fill Information</title>
<link rel="stylesheet" type="text/css" href="formstyle.css">
<style type="text/css">
  body{
  position: relative;
 background-color: black;
  align-items: center;
  align-content: center;
  max-width: 1000px;
}
.container{
  position: relative;
  width: 136%;  
   background: rgb(35, 51, 64);
  margin: 100px;
  display: grid;
  box-shadow: 0 35px 55px rgba(0, 0, 0, 0.1);
  padding: 30px;
  padding-left: 10px;
  margin-left: 45px;
}
td
{
  width: 1100px;
  height: 20px;
}
p{
 font-family: Tahoma, Verdana, sans-serif;
  font-size: 22px;
  font-weight: 500px;
  color: lightblue;
  margin-left: 30px;
}

h1{
  align-items: center;
  margin-left: 100px;
  margin-top: 50px;
  font-size: 50px;
  sh
}
.file{
  font-size: 25px;
  font-family: cursive;
}
.btn1, .btn2{
  font-size: 25px;
  color: lightblue;
  border: 3px solid lightblue;
  padding-left: 20px;
  padding-right: 20px;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
  background-color: transparent;
}


.btn2{
  margin-left: 550px;
  padding: 10px;
  padding-left: 20px;
  padding-right: 20px;
}

.p1{
  font-size: 30px;
}
.text{
  color: lightblue;
  width: 150px;
  height: 20px;
  outline: none;
  font-size: 17px;
  font-family: sans-serif;
  font-weight: 500px;
  padding-top: 10px;
  padding-bottom:10px ; 
  background: rgba(255,255,165,0.17);
  border-style: none;
  background: transparent;
  border-bottom: 1.5px solid lightblue;
}
.btn3{
   font-size: 25px;
  color: lightblue;
  border: 3px solid lightblue;
  padding-left: 20px;
  padding-right: 20px;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
  background-color: transparent;
   margin-left: -30px;
  padding: 10px;
  padding-left:20px;
  padding-right: 20px;
}
</style>
<script>
  var j = 1;
  var i=1;
  var k=1;
  var p=1;
 function addkid() {
  
  var div = document.createElement('div');
  
  div.innerHTML = '<input type="text" placeholder="language" class="text" name="language['+j+']" id="language['+j+']"/>' + ' <input type="button" class="btn1" onclick="remkid(this)" value="-" />';
  document.getElementById('kids').appendChild(div);
  j++;
}

function remkid(div) {
  document.getElementById('kids').removeChild(div.parentNode);
  j--;

}
function addkid1() {
  
  var div = document.createElement('div');
  
  div.innerHTML = '<input type="text" placeholder="hobbi" class="text" name="hobbi['+i+']"/>' + ' <input type="button" class="btn1" onclick="remkid1(this)" value="-" /><br>';
  document.getElementById('kids1').appendChild(div);
  i++;
}

function remkid1(div) {
  document.getElementById('kids1').removeChild(div.parentNode);
  i--;

}
function addkid2() {
  
  var div = document.createElement('div');
  
  div.innerHTML = '<input type="text" placeholder="Certificate" class="text" name="cert['+k+']"/>' + ' <input type="button" class="btn1" onclick="remkid2(this)" value="-" /><br>';
  document.getElementById('kids2').appendChild(div);
 k++;
}

function remkid2(div) {
  document.getElementById('kids2').removeChild(div.parentNode);
  k--;

}

function addkid3() {
  
  var div = document.createElement('div');
  
  div.innerHTML = '<input type="text" placeholder="Skill" class="text" name="skill['+p+']"/>' + ' <input type="button" class="btn1" onclick="remkid3(this)" value="-" /><br>';
  document.getElementById('kids3').appendChild(div);
 p++;
}

function remkid3(div) {
  document.getElementById('kids3').removeChild(div.parentNode);
  p--;

}
</script>
</head>
<body>
 <center><p style="color: lightblue ; margin-left: 430px;font-size: 30px;"><b>RESUME GENERATING FORM</b></p></center> 
  <div class="container">
    <?php 
$username=$_GET['username'];
    //$username="rithesh";
echo'
  <form method="POST" action="Resume3.php?username='.$username.'" enctype="multipart/form-data">

<table style="  border-spacing: 10px; ">
  <tr><td colspan="5" align="center"><p class="p1"><b>Personal Information</b></p></td></tr>
  <tr >
    <td><p>Enter First Name</p></td><td><input type="text" autofocus placeholder="First Name" name="fname" class=text required></td>
    <td><p>Enter Last Name</p></td><td><input type="text" placeholder="Last Name" name="lname" class=text required></td></tr>
    <tr><td><p>Load Image</p></td><td><input type="file" name="image" class="file" required></td>
    <td><p>Enter Address</p></td><td><input type="text" placeholder="Address" name="add" class=text required></td></tr>
    <tr><td><p>Enter DOB</p></td><td><input type="date" name="dob"  class=text required></td>
    <td><p>Enter Phone</p></td><td><input type="number" placeholder="Phone Number" name="phone" class=text required></td></tr>
    <tr><td><p>Enter Email</p></td><td><input type="email" placeholder="Email" name="mail" class=text required></td>
    <td><p>Enter Linkdin url</p></td><td><input type="url" placeholder="Linkedin" name="url" class=text required></td></tr>
    <tr><td><p>Enter Nationality</p></td><td><input type="text" placeholder="Nationality" name="nation" class=text required></td>
  <td><p>Enter Languages</p></td><td><div id="kids">
      <input type="text" placeholder="Language" name="lang" class="text" required>
      <input type="button" class="btn1" onclick="addkid()" value="+" />
     </div></td></tr>
     <tr><td><p>Enter Hobbies</p></td><td><div id="kids1">
      <input type="text" placeholder="hobbi" name="h" class="text" required>
      <input type="button" class="btn1" onclick="addkid1()" value="+" />
     </div></td>
     <td><p>Enter Objective</p></td><td><input type="text" placeholder="Objective" name="objective" class=text required></td></tr>
    <tr><td colspan="5" align="center"><p class="p1"><b>Education qualification</p></b></td></tr>
    <tr><td colspan="5" align="center"><p><b>Graduation</b></p></td></tr>
    <tr><td><p>Duration</p></td><td><input type="text" placeholder="Duration" name="year1" class=text required></td>
    <td><p>Course</p></td><td><input type="text" name="course1" placeholder="Course" class=text required></td></tr>
    <tr><td><p>University/Institution</p></td><td><input type="text" placeholder="University" name="university1" class=text required></td>
    <td><p>Percentage</p></td><td><input type="text" name="perc1" placeholder="Percentage" class=text required></td></tr>
    <tr><td colspan="5" align="center"><p><b>II Pre-University Education</b></p></td></tr>
    <tr><td><p>Duration</p></td><td><input type="text" placeholder="Duration" name="year2" class=text required></td>
    <td><p>Course</p></td><td><input type="text" name="course2" placeholder="course" class=text required></td></tr>
    <tr><td><p>University/Institution</p></td><td><input type="text" placeholder="University" name="university2" class=text required></td>
    <td><p>Percentage</p></td><td><input type="text" name="perc2" placeholder="Percentage" class=text required></td></tr>
    <tr><td colspan="5" align="center"><p><b>X Standard</b></p></td></tr>
    <tr><td><p>Duration</p></td><td><input type="text" placeholder="Duration" name="year3" class=text required></td>
    <td><p>Percentage</p></td><td><input type="text" name="perc3" placeholder="Percentage" class=text required></td></tr>
    <tr><td><p>School</p></td><td><input type="text" name="university3" placeholder="School" class=text required></td></tr>
    <tr><td colspan="5" align="center"><p><b>Skills and certifications</b></p>s</td></tr>
     <tr><td><p>Enter certification</p></td><td><div id="kids2">
      <input type="text" placeholder="Certificate" name="c" class="text" required>
      <input type="button" class="btn1" onclick="addkid2()" value="+" />
     </div></td>
     <td><p>Enter skills</p></td><td><div id="kids3">
      <input type="text" placeholder="skills" name="s" class="text" required>
      <input type="button" class="btn1" onclick="addkid3()" value="+" />
     </div></td></tr>
     <tr><td colspan="5"></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" class="btn2" align="center"></td><td colspan="1"><button class="btn3" onclick=window.location.href="new_exist_resume2.php?username='.$username.'">Cancel</button></td></tr>';
      ?>
</table>
 </form>
</body>
</html>