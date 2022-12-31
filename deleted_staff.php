<?php
$staffid=$_GET['staffid'];
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
$qry="delete from staff where staff_id='$staffid'";
$rslt=$cn->query($qry);
echo'<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-color: black;
		}
.animate-bottom{
			background-color:rgba(255,255,255,0.97);
			margin: 150px;
			margin-left: 500px;
			height: 300px;
			width: 500px
		}
		.animate-bottom p{
			color: black;
			font-size: 40px;
			font-family: san-serif;
			text-align: center;
			padding-top: 100px;
			border-radius: 95px;
			letter-spacing: 2px;
		}
		
		#loader {
  position: absolute;
  opacity: o.1;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 19px solid #f3f3f3;
  border-radius: 80%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 3s linear infinite;
  animation: spin 3s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
  border-radius:40px;
}
  p{

  	text-transform: uppercase;
    color: black;
    font-family: fantasy;
    font-size: 30px;
  }
	</style>

</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
	
 <p>STAFF RECORD DELETED SUCCESSFULL</p>
  <script type="text/javascript">
   setTimeout(function(){window.location.href="remove_staff.php";},4000);
 </script>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>';
?>