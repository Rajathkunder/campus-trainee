<?php
$username=$_GET['username'];
echo'
<!DOCTYPE html>
<html>
<head>
<style>

	body{
		 background: rgb(35, 51, 64);
	}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
  box-shadow: 90px;
}

.button1 {background:transparent;
  border:5px outset ;
  position: absolute;
  left: 600px;
  top: 200px;
  height: 120px

} 
.button2 {background:transparent;
   border:5px outset ;
 position: absolute;
  left: 600px;
  top: 400px;
width:250px;
height: 120px
} .button3{background:transparent;
    border:5px outset ;
}
  


  .button:hover {

  transform: translateY(-7px);
}
</style>
</head>
<body>



<button class="button button1" onclick=window.location.href="Resume3_form.php?username='.$username.'">CREATE NEW RESUME</button>
<button class="button button2" onclick=window.location.href="exist_resume3.php?username='.$username.'">EXISTING RESUME</button>
<button class="button button3" onclick=window.location.href="choosingtemplate.php?username='.$username.'">BACK</button>

</body>
</html>';
?>
