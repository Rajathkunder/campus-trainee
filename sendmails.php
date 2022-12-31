<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script src="sweetalert.js"></script>
<body>
<?php
$email=$_GET['email'];
//echo $email;
$otp=rand(1000,9999);
$otp1 = $otp; 
$ciphering = "AES-128-CTR"; 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
$encryption_iv = '1234567891011121'; 
$encryption_key = "encryptdecrypt"; 
$onetime = openssl_encrypt($otp1, $ciphering, 
            $encryption_key, $options, $encryption_iv);  
$onetime=base64_encode($onetime);
$to_email = $email;
$subject = "CAMPUS TRAINEE LOGIN";
$body = "Your one time password is ".$otp;
$headers = "From: rajath2322@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    //echo "<script>alert('otp has been sent');</script>";
    //echo '<script>window.location.href="verifyotp.php?email='.$email.'&onetime='.$onetime.'"</script>';
}
echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'OTP has been sent',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='verifyotp.php?email=".$email."&onetime=".$onetime."'})</script>";  
?>
</body>
</html>
