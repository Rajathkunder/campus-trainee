<!--<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
		
		.d1{
			
			height: 130px;
			width: 740px;
			background: transparent;
			border:11px solid white;
			margin-left: 340px;
			margin-top: 30px;
		}
	
		.dropdown-btn {
			height: 130px;
			width: 740px;
			background: transparent;
		}
		
			h1{
		
margin-left: 60px;
font-size: 40px;
		}
		.dropdown-container {
  display: none;
  background-color: black;
  padding-left: 8px;
}
a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
	</style>
</head>
<body>
	<div class="d1"><button class="dropdown-btn">
		<h1>VERBAL</h1></button>
		<div class="dropdown-container">
    <a href="#">STUDENT</a>
    <a href="#">STAFF</a>
   
  </div>

	</div>
	<div class="d1"><button class="dropdown-btn">
		<h1>REASONING</h1></button>

	</div>
	<div class="d1"><button class="dropdown-btn">
		<h1>NUMERICAL</h1></button>

	</div>

<div class="d1"><button class="dropdown-btn">
		<h1>PUZZLE</h1></button>

	</div>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>-->





















<!--<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">

.sidenav {
  height: 1290px;
  width: 1600px;
  position: fixed;
  z-index: 1;
  top: 100px;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
  margin-left: 0px;
  margin-top: -100px;

}


.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: transparent;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-left: 450px;
}


.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


.main {
  margin-left: 200px; 
  font-size: 20px; 
  padding: 0px 10px;
}


.active {
  background-color: blue;
  color: white;
}


.dropdown-container {
  display: none;
  
  padding-left: 8px;
  
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 22px;}
}






























		
		.content{
			position: relative;
			height: 650px;
			width: 160px;
			margin-left: -9px;
			background-color: blue;
			margin-top: 0px;
		}
		#headi{
			color: white;
			margin-top: 8px;
			font-size: 60px;
			font-family: sans-serif;
		}
		.d1{
			background-color: red;
			width: :50px;
			position: relative;
		}
	</style>
</head>
<body>-->
	

<!--<button onclick="location.href='www.yoursite.com'">Click Me</button>-->
<!--<div class="sidenav">
<div class="d1">
  <button class="dropdown-btn">ADD 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">STUDENT</a>
    <a href="#">STAFF</a>
     <a href="#">STAFF</a>
      <a href="#">STAFF</a>
       <a href="#">STAFF</a>
        <a href="#">STAFF</a>
   
  </div>
</div>
<div class="d1">

  <button class="dropdown-btn">REMOVE
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="#">STUDENT</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
  </div></div>
  <div class="d1">

  <button class="dropdown-btn">VIEW 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="#">STUDENT</a>
    <a href="#">STAFF</a>
    <a href="#">STUDENT</a>
    <a href="#">STUDENT</a>
    <a href="#">STUDENT</a>
    <a href="#">STUDENT</a>
  </div></div>
  <div class="d1">

  <button class="dropdown-btn">UPDATE 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="#">STUDENT</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
    <a href="#">STAFF</a>
  </div>
</div>
</div>



<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>



</body>
</html>-->
<!--<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>

<h2>Clickable Dropdown</h2>
<p>Click on the button to open the dropdown menu.</p>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Contact</a>
  </div>
</div>
<div class="dropdown1">
  <button onclick="myFunction1()" class="dropbtn1">Dropdown</button>
  <div id="myDropdown1" class="dropdown-content1">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Contact</a>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>-->



<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;
}





.side-bar.active{
 left: 0;
}

.side-bar .menu{
 width: 100%;
 margin-top: 80px;
  
}

.side-bar .menu .item{
 position: relative;
 cursor: pointer;
}

.side-bar .menu .item a{
 color: black;
 font-size: 22px;
 text-decoration: none;
 display: block;
 padding: 10px 30px;
 line-height: 60px;
}




.side-bar .menu .item i{
 margin-right: 15px;
}

.side-bar .menu .item a .dropdown{
 position: absolute;
 right: 0;
 margin: 20px;
 
}

.side-bar .menu .item .sub-menu{
 background: rgba(255, 255, 255, 0.1);
 display: none;
}

.side-bar .menu .item .sub-menu a{
 padding-left: 80px;
}

.rotate{
 transform: rotate(90deg);
}
.item{
  margin-left: 0px;
  width: 580px;
  margin-top: 30px;

}



.menu-btn{
 position: ;
 color: #fff;
 font-size: 20px;
 margin: 25px;
 cursor: pointer;
}



.main h1{
 color: rgba(255, 255, 255, 0.8);
 font-size: 60px;
 text-align: center;
 line-height: 80px;
}

@media (max-width: 900px){
 .main h1{
   font-size: 40px;
   line-height: 60px;
 }
}
.sub-item{
  border-radius: 10px;
  transition: all .5s ease;
  text-align: center;
  background-color: red;
   background-color: rgba(255, 255, 255, 0.57);
}
.sub-menu{
  border-radius: 10px;
  margin-left: 130px;margin-top: 30px;
  transition: all .5s ease;
  width: 800px;
  background:transparent;


}
.side-bar .menu .item .sub-btn{
  border-radius: 10px;
  transition: all .5s ease;
  padding-top: 30px;
  padding-bottom: 30px;
  width: 950px;
  background-color: rgba(255, 255, 255, 0.57);
  text-align: center;
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









.side-bar{
  position: relative;
  margin-top: 0px;
  margin-left: 260px;
}
*{
  list-style: none;
  text-decoration: none;
  padding: 0;
  margin: 0;
}
body{
  background: rgb(35, 51, 64);;

background-repeat: no-repeat;
background-size: 1200px 700px;
background-attachment: fixed;
background-position: center;
}
.sidebar{
  position: fixed;
  left: -355px;
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
  padding-right: 20px;
  padding-top: 20px;
  color: white;
}
.nam{
  background: black;
  height: 70px;
}
.welcome{
  text-align: center;
  font-size: 80px;
  padding-top: 130px;
  cursor: pointer;
  color: blue;
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
      font-size:15px;
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
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>
 <body>
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
      <li><a href="view_nostudent.php?staff_id='.$staff_id.'"">View Result</a></li>  
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
  

   <div class="side-bar">
     
     <div class="menu">
       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i><b>VERBAL</b></i></a>
         <div class="sub-menu">
           <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=fill in the blanks" class="sub-item"><b>FILL IN THE BLANKS</a></div>
            <div class="d1"><a href="add_question.php?type=match the columns" class="sub-item">MATCH THE COLUMNS</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=error detection" class="sub-item">ERROR DETECTION</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=jumbled word" class="sub-item">JUMBLED WORD</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=vocabulary and grammer" class="sub-item">VOCABULARY AND GRAMMER</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=one word substitute" class="sub-item">ONE WORD SUBSTITUTE</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=idioms and phrases" class="sub-item">IDIOMS AND PHRASES</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=antonyms and synonyms" class="sub-item">ANTONYMS AND SYNONYMS</a></div>
         </div>
       </div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>NUMERICAL</i></a>
         <div class="sub-menu">
           <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=number series" class="sub-item">NUMBER SERIES</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=percentages" class="sub-item">PERCENTAGES</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=expenditure problems" class="sub-item">EXPENDITURE PROBLEMS</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=speed and distance" class="sub-item">SPEED AND DISTANCE</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=fraction ratio average and volume" class="sub-item">FRACTION RATIO AVERAGE AND VOLUME</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=lcm and hcf" class="sub-item">LCM AND HCF</a></div>
             <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=mensuration formulas" class="sub-item">MENSURATION FORMULAS</a></div>
         </div>
       </div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>REASONING</i></a>
         <div class="sub-menu">
           <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=problem on ages" class="sub-item">PROBLEM ON AGES</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=profit and loss" class="sub-item">PROFIT AND LOSS</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=simple interest" class="sub-item">SIMPLE INTEREST</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=time and distance" class="sub-item">TIME AND DISTANCE</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=progression" class="sub-item">PROGESSION</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=compound interest" class="sub-item">COMPOUND INTEREST</a></div>
            <div class="d1"><a href="add_question.php?staff_id='.$staff_id.'&&type=data interpretation" class="sub-item">DATA INTERPRETATION</a></div>
         </div>

       </div>
       
       
   </div>';
?>
   

   <script type="text/javascript">
   $(document).ready(function(){
     
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

    
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
    $('.side-bar').removeClass('active');
      $('.menu-btn').css("visibility", "visible");
    });
   ;

   </script>
<!--<script>
var dropdown = document.getElementsByClassName("sub-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>-->

 </body>
</html>




