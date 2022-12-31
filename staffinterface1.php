 <?php 
  echo'
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title></title>
	<link rel=stylesheet type=text/css href="staff_interface_style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>	
</head>
<style type="text/css">
  body{
    background-color: black;
background-image: url(logo.jpeg);
background-repeat: no-repeat;
background-size: 1200px 700px;
background-attachment: fixed;
background-position: center;
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
<script>

function f1(){Swal.fire({ 
                      icon: "success",
                      title: "successful login",
                      showConfirmButton: false,
                      timer: 2000
                    })
                    }</script>
<body onload="f1();">';

$staff_id=$_GET['staff_id'];
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
$qry="select * from staff where staff_id='$staff_id'";
$rslt=$cn->query($qry);
$r=$rslt->fetch_assoc();
$name=$r['name'];
		echo'

	<input type=checkbox id=check1>
	<label for=check1>
		<i class="fas fa-bars" id=btn></i>
		<i class="fas fa-times" id=btn2></i></label>
	<div class=sidebar>
		
		<header>STAFF</header>
		<ul>
		<li><a href="staffinterface.php?staff_id='.$staff_id.'">Dashboard</a></li>
			<li><a href="myprofile_staff.php?staff_id='.$staff_id.'">Profile</a></li>
			<li><a href="addtest.php?staff_id='.$staff_id.'">Add Questions</a></li>
			<li><a href="select_concept.php?staff_id='.$staff_id.'">Add Test</a></li>
			<li><a href="view_nostudent.php?staff_id='.$staff_id.'">View Result</a></li>	
			<li><a href="login.php">Logout</a></li>
		</ul>
	</div>
	<div class="nam"><h1>'.$name.'</h1></div>
	<input type=checkbox id=check2>
  <label for=check2 class="lbl1">
    <b class="support">support</b>&nbsp;<i class="fas fa-question-circle" style="font-size:28px;color:red"></i></label>
  <div class="msg">
  <div class="msgbox">';
  $qry2="select * from staff_support where staff_id='$staff_id'";
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
<form method="POST" action="staffsend.php?staff_id='.$staff_id.'">
  <input type="text" name="send" class="msgtext" name="" required>
  <input type="submit" name="submit" class="send" value="send">
  </form>
</div>';
	?>
</body>
</html>