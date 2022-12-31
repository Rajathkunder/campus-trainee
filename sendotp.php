<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>enter registered email id</title>
  <script src="sweetalert.js"></script>
 <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  color: white;
}

body {
  background: rgb(35, 51, 64);
  font-family: 'Rubik', sans-serif;
}

.login-form {
  background: transparent;
  border:5px outset rgb(35, 51, 64);
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
  background: transparent;
}
.login-form .input-field input {
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
  background: transparent;
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
  background: #3c4d6d;
}
.input-field1{
  width: 100px;
  height: 50px;
  margin-top: 19px;
  cursor: pointer;
  background: transparent;
  border-radius: 10px;
  color: lightblue;
  outline: none;
  border-color:5px rgb(35, 51, 64);
  font-size: 16px;
}
.not{
  background-color: red;
  width: 270px;
  height: 80px;
  font-size: 20px;
  margin-left: 610px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
}
.h3{
  position: absolute;
  margin-top: 6px;
}
select{
  width: 100px;
  font-size: 20px;
  margin-left: -320px;
  background: transparent;
}
.content{
  background: rgb(35, 51, 64);
}
h1{
  text-align: center;
  color: lightblue;
}
select{
  color: rgb(35, 51, 64);
  background-color: lightblue;
}
option{
  color: rgb(35, 51, 64); 
}
.link{
  color: lightblue;
}
</style>

</head>
<body>
<div class="login-form">
  <form method="POST" action="">
    <h1>Enter Registered email id</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" name='email' required autocomplete="nope">

      </div>

       <select name="type">
          
          <option value="staff">Staff</option>
          <option value="student">Student</option>
        </select>
      <div class="">
        <input type='submit' name='submit' class='input-field1' value='SEND OTP'>

      </div>
      <a href="login.php" class="link">LOGIN?</a>
    </div>
    <div class="action">     
    </div>
  </form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
      $email=$_POST['email'];
      $type=$_POST['type'];
      @$cn=new mysqli('localhost','root','','campus');
      if($cn->connect_error)
      {
          echo"Could not Connect";
          exit;
      }
      if($type=='student')
      {
          $qry="select * from student where email='$email'";
          $rslt=$cn->query($qry);
          if ($rslt) {
            if ($rslt->num_rows!=0) {
              echo '<script>window.location.href="sendmails.php?email='.$email.'";</script>';
            } else {
              echo "<script>Swal.fire({
                             
                              icon: 'warning',
                              title: 'There is no student register with this email',
                              showConfirmButton: false,
                              timer: 2000
                            })</script>";
            }
          }
      }
      else if($type=='staff')
      {
          $qry="select * from staff where email='$email'";
          $rslt=$cn->query($qry);
          if ($rslt) {
            if ($rslt->num_rows!=0) {
              echo '<script>window.location.href="sendmails.php?email='.$email.'";</script>';
            } else {
              echo "<script>Swal.fire({
                             
                              icon: 'warning',
                              title: 'There is no staff register with this email',
                              showConfirmButton: false,
                              timer: 2000
                            })</script>";
            }
          }
      }
      else
      {
        $qry="select * from admin where email='$email'";
          $rslt=$cn->query($qry);
          if ($rslt) {
            if ($rslt->num_rows!=0) {
              echo '<script>window.location.href="sendmails.php?email='.$email.'";</script>';
            } else {
              echo '<div class=not><h3>THERE IS NO ADMIN REGISTER WITH THIS EMAIL ID</h3></div>';
            }
          }
      }
    
}
?>