<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
		  body{
    background-color: black;
  }
.sidenav {
  height: 90%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 62px;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
}
.sidenav a, .dropdown-btn {
  padding: 6px 8px 0px 16px;
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
  background-color: black;
  padding-left: 8px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 10px;}
  .sidenav a {font-size: 22px;}
}
		.content1{position: absolute;
			height: 80px;
			width: 1530px;
			margin-left: -9px;
			background-color: black;
			margin-top: -9px;
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
      position:absolute;
			color: white;
      padding-left: 20px;
      padding-top: 14px;
			margin-top: 8px;
			font-size: 40px;
			font-family: sans-serif;
		}
		.container{
      position: relative;
      height: 55px;
      background-color: rgba(255, 255, 255, 0.78);
      align-content: center;
      width: 1200px;
      border-radius: 98px;
      margin: 50px;
      margin-left: 30px;
  }
  .cont{
      padding-top: 70px;
      margin-left: 190px;
      background-color: gray;
      height:655px;
      width: 1335px;
      overflow: scroll;
    }
	</style>
</head>
<body>
	<div class="content1">
	<h1 id="headi">CAMPUS TRAINEE</h1>
</div>
<!--<button onclick="location.href=">Click Me</button>-->
<div class="sidenav">

  <button class="dropdown-btn">ADD 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add_student.php">STUDENT</a>
    <a href="add_staff.php">STAFF</a> 
  </div>
  <button class="dropdown-btn">REMOVE
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="remove_student.php">STUDENT</a>
    <a href="remove_staff.php">STAFF</a>
  </div>
  <button class="dropdown-btn">VIEW 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="view_nostudent.php">STUDENT</a>
    <a href="#">STAFF</a>
  </div>
  <button class="dropdown-btn">UPDATE 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="#">STUDENT</a>
    <a href="#">STAFF</a>
  </div>
</div>
<div class="cont">
</div>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display == "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>