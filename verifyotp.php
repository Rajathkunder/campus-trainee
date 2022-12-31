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
}

body {
  background: rgb(35, 51, 64);
  font-family: 'Rubik', sans-serif;

}

.login-form {
  background: transparent;
  width: 590px;
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
  font-size: 25px;
  text-align: center;
  font-family: 'Rubik', sans-serif;
  padding: 15px 1px;
  border: 0;
  border: 2px solid #747474;
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
  background: #3c4d6d;
}
.input-field1{
  width: 100px;
  height: 50px;
  margin-top: 19px;
  cursor: pointer;
  background:transparent;
font-size: 18px;
  border-radius: 10px;
  color: lightblue;
}
.not{
  background-color: red;
  width: 180px;
  height: 30px;
  font-size: 20px;
  margin-left: 680px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);

}
.h3{
  position: absolute;
  margin-top: 6px;
}
h1{
  font-size: 30px;
  color: lightblue;
}
#first{
  color: white;
}
#second{
  color: white;
}
#third{
  color: white;
}
#fourth{
  color: white;
}
</style>
</head>
<body>
<div class="login-form">
  <form method="POST" action="">
    <h1>ENTER OTP SENT TO YOUR EMAIL</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" name="otp1" autofocus id="first" size="1" onkeyup="movetoNext(this, 'second')" maxlength="1"  />  
        <input type="text" name="otp2" id="second" size="1" onkeyup="movetoNext(this, 'third')" maxlength="1" />
        <input type="text" name="otp3" id="third" size="1" onkeyup="movetoNext(this, 'fourth')" maxlength="1" />   
        <input type="text" name="otp4" id="fourth" size="1" maxlength="1" />  
      </div>
      <div class="">
        <input type='submit' name='submit' class='input-field1' value='VERIFY'>
      </div>
      <?php
       $email=$_GET['email'];
      echo'
      <a href="sendmails.php?email='.$email.'" class="link">RESEND?</a>
    </div>
    <div class="action">  
    </div>
  </form>
</div>
<script>
  function movetoNext(current, nextFieldID) {  
      if (current.value.length >= current.maxLength) {  
      document.getElementById(nextFieldID).focus();  
}  
}  
</script>  
</body>
</html>';

if (isset($_POST['submit'])) {
  $email=$_GET['email'];
  $otp=$_GET['onetime'];
  $otp=base64_decode($otp);
  $decryption_iv = '1234567891011121';  
  $decryption_key = "encryptdecrypt"; 
  $ciphering = "AES-128-CTR"; 
  $options = 0; 
   $iv_length = openssl_cipher_iv_length($ciphering); 
  $onetime=openssl_decrypt ($otp, $ciphering,  
            $decryption_key, $options, $decryption_iv); 
  $otp1=$_POST['otp1'].$_POST['otp2'].$_POST['otp3'].$_POST['otp4'];
  if ($otp1==$onetime) {
    echo '<script>window.location.href="changepassword.php?email='.$email.'";</script>';
  } else {
    echo "<script>Swal.fire({
                             
                              icon: 'warning',
                              title: 'INVALID OTP',
                              showConfirmButton: false,
                              timer: 2000
                            })</script>";
    
  }
}
?>