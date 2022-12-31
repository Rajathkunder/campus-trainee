<?php 
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
$email=$r['email'];
$designation=$r['designation'];
$department=$r['department'];
$qual=$r['qual'];

echo'
<!DOCTYPE html>
<html>
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>	
<style>
*{
	list-style: none;
	text-decoration: none;
	padding: 0;
	margin: 0;
}
body{
	background: black;
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
	padding-right: 0px;
	padding-top: 20px;
	color: white;

}
.nam{
	background: #063133;
	height: 70px;
	margin-top: 0px;
}
.welcome{
	background-color: white;
}
.contain{
	height: 80px;
}
.div1{		
			background:transition;
			height: 80px;
			width:260px;
			
			top: 70px;	
			text-align: center;
			padding-left: 500px;
			margin-left:375px;
			border: 3px outset #696969;
			border:none;

		}
	.div1 h1{
		text-align: center;
		padding-right: 600px;

	}
	 .btn{
		position: relative;
		color: red;
		font-size: 15px;
		
			height: 40px;
			width: 100px;
			bottom: 30px;
			right: 10px;
			float: right;
	}
	.btn:active{
		bottom: 25px;
	}
	.div2{
  		
  		margin-left: 10px;
			background:transparent;
			width: 250px;
			height: 280px;
			padding-top: 40px;

		}
		.div3{
			position:absolute;
 			top: 150px;
  		left:655px;
			background:white;
			height: 335px;
			width: 480px;
			 right:0;
			 color:lightblue;
			 background:transparent;
		}
		.img1{
			border-radius: 50px;
		}
		.h{
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  padding-top: 30px;
  text-align: center;
		}
		.name{
			 left: 40px;
  		font-size: 20px;
  		padding-left: 20px;
   		padding-top: 20px;
   		padding-bottom: 5px;
		}
		.name1{
			padding-left: 20px;
			padding-bottom: 10px;
			font-size: 20px;	  
  		left: 40px;
   		font-family: Arial, Helvetica, sans-serif;
		}
		.btn{
			background:transparent;
			border:none;
			margin-left:50px;
			cursor:pointer;
		}
		.all{
			
			height:350px;
			width:750px;
			margin-left:376px;
			background:#ece8e830;
			border: 7px outset #696969;
		}
		hr{
			width:30%;
			text-align:left;
			margin-left:0;
		}
		.pg{
			margin-left:-180px;
		}
		.tst{
			position:absolute;
			height:350px;
			width:750px;
			margin-left:-276px;
			background:#ece8e830;
			border: 7px outset #696969;
			margin-top:410px;
			overflow:scroll;
		}
		.d2{
  height:200px;
    width:700px;
    background: rgb(35, 51, 64);
    margin-left:250px;
    margin-top:10px;
    border: 6px outset #696969;
    border-radius:0px;
    color:lightblue;
    cursor: pointer;
}
.d3{
  margin-top: 60px;
  
  width: 230px;
}
.d4{
  
  width: 400px;
  margin-left: 250px;
  margin-top: -89px;
  height: 120px;
}

.d2 p{
    font-family: "Open Sans";
  color: lightblue;
  font-size:20px;
  margin-top:1px;
  margin-left:10px;
  }
.rslt{
  overflow-y: scroll;
}
.d4 p{
  left: 0px;
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
	<title></title>
	
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title></title>
	<link rel=stylesheet type=text/css href=">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>	
</head>
<body>
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
  <input type="text" name="send" class="msgtext" name="">
  <input type="submit" name="submit" class="send" value="send">
  </form>
</div>
		<div class="contain">
			<div class="div1">
			<h1 class="pg" style="color: rgba(255,255,255,0.87);">PROFILE</h1>
		<button class="btn" onclick=window.location.href="myprofilestaff_edit.php?staff_id='.$staff_id.'"><i class="fa fa-edit" style="font-size:40px;color:lightblue"></i></button></div>
			</div>
			
			
		<div class="all">
	<div class="div2">
<center>';echo"<img src='images/".$r['image']."'"; echo'<img src="" class="img1"  width="200px" height="210"></center>
<h1 class="h">'.$name.'</h1>
</div>
<div class="div3">
<table style="  border-spacing: 30px;">
<tr><td>
<h3 class="name">Full Name</h3> <p class="name1">'.$name.'</p></td>

<td><h3 class="name">Email Address</h3> <p class="name1">'.$email.'</p></td></tr>

<tr><td><h3 class="name">Designation</h3> <p class="name1">'.$designation.'</p></td>

<td><h3 class="name">Department</h3> <p class="name1">'.$department.'</p></td></tr>

<tr><td><h3 class="name">Qualification</h3> <p class="name1">'.$qual.'</p></td>

<td><h3 class="name">staff_id</h3> <p class="name1">'.$staff_id.'</p></td></tr>

</div>
</div>
</body>
</html>';
?>