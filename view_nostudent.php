<?php
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
$staff_id=$_GET['staff_id'];
$st="select * from staff where staff_id='$staff_id'";
$ss=$cn->query($st);
$e=$ss->fetch_assoc();
$name=$e['name'];
echo '
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel=stylesheet type=text/css href="staff_interface_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO OF STUDENTS</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <script src="sweetalert.js"></script>
  <style type="text/css">

  
   
   
    
  body{
  background-color: black;



background-attachment: fixed;
background-position: center;
 }












    .content1{position: relative;;
      height: 80px;
      width: ;
      margin-left: -9px;
      background-color: #042331;
      margin-top: -9px;
    }
    
    #headi{
      position:absolute;
      color: white;
      padding-left: 600px;
      padding-top: 14px;
      margin-top: 9px;
      font-size: 24px;
      font-family: sans-serif;
      margin-left: 80px;
    }
  
   

 
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}



p{
 font-family: Tahoma, Verdana, sans-serif;
  font-size: 22px;
  font-weight: 500px;
  color: lightblue;
  margin-left: 30px;
}
.
.h{
  align-items: center;
  margin-left: 100px;
  margin-top: -30px;
  font-size: 50px;
  sh
}

 

 .cont{
      margin-top:-29px;
      padding-top: 90px;
      margin-left: 200px;
      background: rgb(35, 51, 64);
      height:675px;
      width: 1335px;
      overflow-y: scroll;

    }
    .txt{
      font-size:25px;
      margin-top:10px;
      margin-left:900px;
      border-color:blue;
      height:39px;
     
    }

 .na{
      font-size: 30px;
      padding-left: 50px;
    }
    .cl{
      font-size: 30px;
      padding-left: 410px;
    }
    .reg{
      font-size: 30px;
      padding-left: 400px;
    }
      .btn{
      width: 60px;
      height:39px;
      font-size:25px;
      background-color:blue;
      color:white;
    }
    .name{
      position: ;
      width: 400px;
      float: left;
      left: 20px;
      text-transform: uppercase;
    }
    .cls{
      position: ;
      width: 200px;
      left: 500px;
      
    }
    .regno{
      position: ;
      position: ;
      margin-top: 0px;
      width: 190px;
      height: 40px;
      float: right;
      padding-right: 20px;
    }
    .container{
      
      height: 70px;
      background:transparent;
      align-content: center;
      width: 1240px;
      border-radius: 10px;
      border: 5px outset #696969;
      margin: 50px;
      margin-top: 30px;
      margin-left: 30px;
    }
    .dlt{
      position: relative;
      border: none;
      background: transparent;
      top: -25px;
      left: 1130px;
      cursor: pointer;
    }
    p{
      font-family: sans-serif;
      font-size: 23px;
      padding-top: 15px;
    }
    h1{
      margin-left: 430px;
      color: lightblue;

    }

 .link a{
      position: relative;
      margin-left: 1175px;
      width: 5px;
      top: -50px;
    }

.d1{
   margin-left: 0px;
  width: 800px;
  height: 90px;
 margin-top: 10px;
 
 border-radius: 10px;
 transition: all .5s ease;
 
 padding-top: 10px;
 padding-bottom: 10px;
}

.nam{
    background: #063133;
    padding-right: 120px;
    font-size:15px;
    margin-top:2px;
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
      font-size:18px;

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

h1{
	margin-top:0px;
	font-size:22px;
}
h2{
  color:lightblue;
  margin-left:100px;
  margin-top:40px;
}





  </style>


</head>


<body>
  
<!--<button onclick="location.href=">Click Me</button>-->
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
  <div class="nam"><h1><b>'.$name.'</b></h1></div>
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
  
<div class="cont">
<form method="POST" action="view_nostudent.php?staff_id='.$staff_id.'">
';
?>
<input type="text" name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];} ?>" class="txt" placeholder="search" ><button type="submit" class="btn" name="submit"><i class="fa fa-search"></i></button>
</form>


<?php


$qry="select * from student";
$rslt=$cn->query($qry);
if(isset($_POST['submit']))
{
 
  $search=$_POST['search'];
  $qry="SELECT * FROM `student` WHERE concat(name,regino) like '%$search%'";
  $rslt1=$cn->query($qry);
  if($rslt1->num_rows>0)
  {
    while($r1=$rslt1->fetch_assoc())
    {
      //$regino=$r1['regino'];
       echo'<div class="container">
        <P><span class="name">'.$r1['name'].'</span><span class="cls">'.$r1['class'].'</span><span class="regno">'.$r1['regino'].'</span></P>
        <div class="link">
          <a href="result.php?username='.$r1['username'].'&staff_id='.$staff_id.'"></i><i class="fa fa-eye" style="font-size:40px;color:white"></i></a>
        </div>
      </div>';
    }

  }
  else
  {
    echo"<h2>Did not found</h2>";
  }
}
else
{
    while($r=$rslt->fetch_assoc())
    {
      echo'<div class="container">
        <P><span class="name">'.$r['name'].'</span><span class="cls">'.$r['class'].'</span><span class="regno">'.$r['regino'].'</span></P>
        <div class="link">
          <a href="result.php?username='.$r['username'].'&staff_id='.$staff_id.'"><i class="fa fa-eye" style="font-size:40px;color:white"></i></a>
        </div>
      </div>';
    }
}
echo'</div>
<script>







</script>
</body>
</html>';
?>