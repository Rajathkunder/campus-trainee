
<!DOCTYPE html>
<html lang="en" >
<head>
	

  <meta charset="UTF-8">
  <title>enter new password</title>
  <script src="sweetalert.js"></script>
 <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

body {
   background: rgb(35, 51, 64);
  font-family: 'Rubik', sans-serif;
}

.login-form {
  background: transparent;
  width: 500px;
  margin: 65px auto;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  border-radius: 4px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
}
.login-form h1 {
  padding: 35px 35px 0 35px;
  font-weight: 300;
}
.login-form .content {
  padding: 35px;
  text-align: center;
}
.login-form .input-field {
  padding: 12px 5px;
}
.login-form .input-field input {
  background: transparent;
  font-size: 16px;
  display: block;
  font-family: 'Rubik', sans-serif;
  width: 100%;
  padding: 10px 1px;
  border: 0;
  border-bottom: 1px solid #747474;
  outline: none;
  -webkit-transition: all .2s;
  transition: all .2s;
}
.login-form .input-field input::-webkit-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::-moz-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input:-ms-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::-ms-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::placeholder {
  text-transform: uppercase;
}
.login-form .input-field input:focus {
  border-color: #222;
}
.login-form a.link {
  text-decoration: none;
  color: #747474;
  letter-spacing: 0.2px;
  text-transform: uppercase;
  display: inline-block;
  margin-top: 20px;
}
.login-form .action {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
}
.login-form .action button {
  width: 100%;
  border: none;
  padding: 18px;
  font-family: 'Rubik', sans-serif;
  cursor: pointer;
  text-transform: uppercase;
  background: #e8e9ec;
  color: #777;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
  letter-spacing: 0.2px;
  outline: 0;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.login-form .action button:hover {
  background: #d8d8d8;
}
.login-form .action button:nth-child(2) {
  background: #2d3b55;
  color: #fff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 4px;
}
.login-form .action button:nth-child(2):hover {
  background: lightblue;
}
.input-field1{
  width: 100px;
  height: 50px;
  margin-top: 19px;
  cursor: pointer;
  background-color: lightblue;
  border-radius: 40px;
  color: blue;
}
.not{
  background-color: green;
  width: 270px;
  height: 30px;
  font-size: 20px;
  margin-left: 610px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.7);

}
.not1{
  background-color: red;
  width: 440px;
  height: 30px;
  font-size: 20px;
  margin-left: 540px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.5);

}
.h3{
  position: absolute;
  margin-top: 10px;
  text-align: center;

}
#d1{
	background-color: green;
	width: 250px;
	margin-left: 640px;
	height: 40px;
	margin-top: 10px;
	text-align: center;
	box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
}
.bt1{
	background-color: grey;
	height: 50px;
	width:200px;
	border-radius: 40px;
}

.action1{
	background-color: grey;
	height: 50px;
	width:200px;
	margin-left: 650px;
	margin-top: 70px;
	border-radius: 40px;
}
h1{
  color:lightblue;
  text-align: center;
}
.pass{
  color: white;
}
</style>
</head>
<body>
	<div id="d1">
		<h3>OTP VERIFIED ✅</h3>
	</div>
<div class="login-form">
  <form method="POST" action="">
    <h1>Enter new Password</h1>
    <div class="content">
      <div class="input-field">
        <input type="password" class="pass" placeholder="new password" required name='pass1' autocomplete="nope">
      </div>
      <div class="input-field">
        <input type='password' class="pass" name='pass2' required class='input-field' placeholder="Confirm new password">
      </div>
    </div>
    <div class="action">
       <button class='bt' type="submit" name="submit">CHANGE PASSWORD</button><br>
    </div>
  </form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) { 
$email=$_GET['email'];
$pass=$_POST['pass1'];
$pass1=$_POST['pass2'];
if ($pass!=$pass1) {
	# code...
  echo "<script>Swal.fire({
                             
                              icon: 'warning',
                              title: 'BOTH PASSWORD SHOULD MATCH',
                              showConfirmButton: false,
                              timer: 2000
                            })</script>";
	// echo '<div class=not1><h3>BOTH PASSWORD SHOULD MATCH</h3></div>';
}
else
{
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    $qry1="select * from student where email='$email'";
    $rs=$cn->query($qry1);
    if($rs->num_rows!=0){
$qry="update student set password='$pass' where email='$email'";
$rslt=$cn->query($qry); 
echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'PASSWORD CHANGED',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='login.php'})</script>";
}
else
{
  
  $qry="update staff set password='$pass' where email='$email'";
$rslt=$cn->query($qry); 
echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'PASSWORD CHANGED',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='login.php'})</script>";

}

   
  
}
}
?>

