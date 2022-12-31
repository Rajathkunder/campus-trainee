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
$qry1="select *from noti where username='$username'";
$rslt1=$cn->query($qry1);
echo'
<!DOCTYPE html>
<html>
<head>
	<title>choose template</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
  *{
  list-style: none;
  text-decoration: none;
  padding: 0;
  margin: 0;
}
.b1{

	 position: inherit;
  margin-left: 100px;
  margin-top: 30px;
  background: url("elonmusk.jpg");
  height: 400px;
  width: 340px;
  background-size: cover;
  align-items: center;
   cursor:pointer;
}
.b2{

	 position: absolute;
  left: 600px;
  top: 170px;
  background: url("bill.jpg");
  height: 400px;
  width: 340px;
  background-size: cover;
  align-items: center;
 cursor:pointer;
  margin-top: 30px;
}
.b3{
 margin-top: 30px;
	 position: ;
  margin-left: 1100px;
  margin-top: -650px;
   background: url("sunder.jpg");
  height: 400px;
  width: 340px;
  background-size: cover;
  align-items: center;
  cursor:pointer;

}
.b1, .b2, .b3{
	border: 1px solid black;
	border-radius: 15px;
}

body  {

  background-color: #040A1C;
}
h1 {
   font-family: cursive;
  font-size: 40px;
  color: #800080;

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
  font-size: 22px;
  padding-right: 100px;
  padding-top: 20px;
  color: lightblue;
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
.choose{
  margin-right:500px;
  font-size:35px;
}
.div1{
margin-top:20px;
}
.nam{
    background: #063133;
    padding-right: 120px;
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
	

</head>
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
	<br><h1 class="choose">Choose Template</h1>
<div class="div1">';
echo'
<button class=b1 onclick=window.location.href="new_exist_resume1.php?username='.$username.'"></button>
<button class=b2 onclick=window.location.href="new_exist_resume2.php?username='.$username.'"></button>
<button class=b3 onclick=window.location.href="new_exist_resume3.php?username='.$username.'"></button>
</div>

</body>
</html>';
?>