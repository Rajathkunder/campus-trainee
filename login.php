<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>STAFF LOGIN</title>
  <script src="sweetalert.js"></script>
	<style>
		body {
   background-image: url("campus-hiring.png");

  /* Full height */
  
  background-size: 1550px 750px;
  background-repeat: no-repeat;
  
}
.div1{
	 
	  margin-top: 100px;
  margin-bottom: 40px;
  margin-right: 90px;
  margin-left: 520px;
	border: 5px outset #696969;
  text-align: center;
  width:400px;
  height:450px;
  border-radius: 12px;
    }
.myclass {
    height: 40px;
    position: relative;
    border: 2px solid #cdcdcd;
    background-color: rgba(255,255,255,0.17);
   
    font-size: 14px;
     border-radius: 5px;
     width: 270px;
     font-size: 20px;
     font-weight: 800px;
     font-family: sans-serif;
     color: #fff;
}
.btn{
	 position: absolute;
  left: 790px;
  top: 395px;
  font-size: 23px;
  border-radius: 12px;
  padding: 10px;

}
  .third, .btn3, .btn4 {
  border-color: #3498db;
  color: #fff;
  transition: all 150ms ease-in-out;
  background: transparent;
  padding-left: 15px;
  padding-right: 15px;
}
.third:hover, .btn3:hover{
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
.btn4:hover{
  color: red;
}
.btn2{
	 position: absolute;
  left: 30px;
  top: 30px;
  font-size: 20px;
  border-radius: 10px;
  border-color: #3498db;
  color: #fff;
  transition: all 150ms ease-in-out;
  background: transparent;
  padding: 10px;
  padding-left: 17px;
  padding-right: 17px;
 
}
.btn4{
   position: absolute;
  left: 630px;
  top: 480px;
  font-size: 18px;
  border-radius: 8px;
   background: transparent;
    padding-top: 10px;
   padding-bottom: 10px; 
}
.btn4:active, .btn:active, .btn2:active, .btn3:active{
  
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.icon {
  padding: 10px;
  color: #fff;
  min-width: 30px;
  text-align: left;
  margin-left: 1px;

}
.btn2:hover{
     box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
h1{
  padding-top: 20px;
  color: #fff;
  font-size: 40px;

}
label{
  color: white;
  font-size: 30px;
  letter-spacing: 1px;
  text-align: left;
  padding-right: 15px;
}
.drop{
  position: absolute;
  padding-left: 40px;
  padding-top: 10px;

}
.drop select{
  background-color: rgba(255,255,255,0.17);
  font-size: 20px;
  color: white;
  padding: 5px;
  font-weight: 600px;

}
.drop option{
  color: white;
  background-color: rgb(70,70,70);

}
.l1{
  color: red;
  font-size: 20px;
}
</style>
</head>
<body>
	<div class="div1">
		<form  action="" method="POST">
	<h1>LOGIN &nbsp;HERE</h1><br>
	<i class="fa fa-user icon icon-4x"></i>
	<input type=text class="myclass" name=username  placeholder="Username"  required><br><br>
  <i class="fa fa-key icon"></i>
	<input type=password class="myclass" name=password  placeholder="Password" required><br><label>
 
<?php
//session_start();

  if(isset($_POST['submit'])) 
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $type=$_POST['type'];
    @$cn=new mysqli('localhost','root','','campus');
    if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    if($type=='admin')
    {
      $qry="select * from admin where username='$username' and password='$password'";
      $rslt=$cn->query($qry);
      if($rslt->num_rows==0)
      {
       echo"<label class=l1>Invalid username/password</label>";
       }
      else
      {
        echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'successful login',
                      showConfirmButton: false,
                      timer: 1000
                    }).then((result) => { window.location.href='admin_interface.html' })</script>";
       //echo'<script>window.location.href="admin_interface.html";</script>';
      }
    }
    else if($type=='staff')
    {
        $qry="select * from staff where username='$username' and password='$password'";
        $rslt=$cn->query($qry);
        if($rslt->num_rows==0)
        {
         echo"<label class=l1>Invalid username/password</label>";
         }
        else
        {
          $r=$rslt->fetch_assoc();
          $staff_id=$r['staff_id'];
          echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'successful login',
                      showConfirmButton: false,
                      timer: 1000
                    }).then((result) => { window.location.href='staffinterface.php?staff_id=".$staff_id."' })</script>";
         //echo'<script>window.location.href="staffinterface.php?staff_id='.$staff_id.'";</script>';
        }
        

    }
    else
    {
      $qry="select * from student where username='$username' and password='$password'";
      $rslt=$cn->query($qry);
      if($rslt->num_rows==0)
      {
       echo"<label class=l1>Invalid username/password</label>";
       }
      else
      {
        //$_SESSION['username']=$username;
        echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'successful login',
                      showConfirmButton: false,
                      timer: 1000
                    }).then((result) => { window.location.href='student_interface.php?username=".$username."' })</script>";
       echo'<script>window.location.href="student_interface.php?username='.$username.'";</script>';
      }
    }
  }
  ?><br>
  <div class="drop"> <label>Type</label>
  <select name="type">
    <option value="admin">Admin</option>
    <option value="staff">Staff</option>
    <option value="student">Student</option>
  </select></div>
  <br>
	<input type=submit name="submit" class="btn third" value="LOGIN">
	</form>
	
  <a href="sendotp.php" class="btn4">FORGOT PASSWORD</a>

</div>
<button class="btn2" onclick="window.location.href='frontpage.html';"><i class="fa fa-arrow-left"></i>&nbsp;BACK</button>
</body>
</html>
