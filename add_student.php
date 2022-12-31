<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="sweetalert.js"></script>
  <style type="text/css">
 body{
  background-color: black;


background-size: 1200px 700px;
background-attachment: fixed;
background-position: center;
 }
.sidenav {
 height: 90%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 62px;
  left: 0;
  background-color: #042331;
  overflow-x: hidden;
  padding-top: 20px;
}
.sidenav a, .dropdown-btn {
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
  background-color: #042331;
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
    .content1{position: relative;;
      height: 80px;
      width: ;
      margin-left: -9px;
      background-color: #042331;
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
      padding-left: 600px;
      padding-top: 14px;
      margin-top: 9px;
      font-size: 24px;
      font-family: sans-serif;
    }
   img{
      height: 70px;
      width: 80px;
   
      border-radius: 75%;
    }
    .ig{
      width: 150px;
      height: 101px;
      margin-left: 700px;
    }
    .ig .dropdown-btn{
  margin-top: -50px;
  text-decoration: none;
  font-size: 30px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  width: 120px;
}
.ig a{
  margin-top: 20px;
  font-size: 25px;
  color: white;
  text-align: right;
}
*{
  text-decoration: none;
}

 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}


.side-bar{
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(15px);
  width: 290px;
  height: 100vh;
  position: fixed;
  top: 0;
  left: -100%;
  overflow-y: auto;
  transition: 0.6s ease;
  transition-property: left;
}

.side-bar.active{
  left: 0;
}

.side-bar .menu{
  width: 100%;
  margin-top: 110px;
}

.side-bar .menu .item{
  position: relative;
  cursor: pointer;
}

.side-bar .menu .item a{
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  display: block;
  padding: 5px 30px;
  line-height: 60px;
}

.side-bar .menu .item a:hover{
  background: #8621F8;
  transition: 0.3s ease;
}

.side-bar .menu .item i{
  margin-right: 15px;
}

.side-bar .menu .item a .dropdown{
  position: absolute;
  right: 0;
  margin: 20px;
  transition: 0.3s ease;
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

.close-btn{
  position: absolute;
  color: #fff;
  font-size: 20px;
  right: 0;
  margin: 25px;
  cursor: pointer;
}

.menu-btn{
  position: absolute;
  color: #fff;
  font-size: 30px;
  margin: 25px;
  cursor: pointer;
  margin-top: -50px;
}

.main{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px;
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
td
{
  width: 800px;
  height: 20px;

}
p{
 font-family: Tahoma, Verdana, sans-serif;
  font-size: 22px;
  font-weight: 500px;
  color: lightblue;
  margin-left: 30px;
}
.text{
  color: lightblue;
  width: 150px;
  height: 20px;
  outline: none;
  font-size: 17px;
  font-family: sans-serif;
  font-weight: 500px;
  padding-top: 10px;
  padding-bottom:10px ; 
  background: rgba(255,255,165,0.17);
  border-style: none;
  background: transparent;
  border-bottom: 1.5px solid lightblue;
}
.h{
  align-items: center;
  margin-left: 100px;
  margin-top: -30px;
  font-size: 50px;
  sh
}
.file{
  font-size: 19px;
  font-family: Tahoma, Verdana, sans-serif;
}

.div1{
  background: rgb(35, 51, 64);
  width: 1200px;
  margin-top: 20px;
  height: 600px;
  margin-left: 180px;
  
}
 .btn2{
  font-size: 25px;
  font-family: Tahoma, Verdana, sans-serif;
  border: 2px solid #145122;
  padding-left: 20px;
  padding-right: 20px;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
  margin-top: 70px;
  background:transparent;
  color: lightblue;
  border-color: lightblue;
  margin-left: -180px;
}




  </style>


</head>
<body>
  <?php 
  $username="";
    $name="";
    $email="";
    $password="";
    $phone="";
    $address="";
    $inst="";
    $class="";
    $regino="";
  echo'
  <div class="content1">
<center> <h3 id="headi">ADD STUDENT DETAILS</h3></center>
</div>


<div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
       <div class="item"><a href="admin_interface.html"><i class="fas fa-table"></i>DASHBOARD</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>ADD<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="add_student.php" class="sub-item">STUDENT</a>
            <a href="add_staff.php" class="sub-item">STAFF</a>
            
          </div>
        </div>
        
        <div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>REMOVE<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
           <a href="remove_student.php" class="sub-item">STUDENT</a>
            <a href="remove_staff.php" class="sub-item">STAFF</a>
            
          </div>
        </div>
        
<div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>VIEW<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
           <a href="view_nostudent1.php" class="sub-item">STUDENT</a>
            <a href="view_nostaff.php" class="sub-item">STAFF</a>
            
          </div>
        </div>
        <div class="item">
          <a href="admin_support.php"><i class="fas fa-question-circle"></i>SUPPORT</a>
        </div>
 <div class="item"><a href="login.php"><i class="fas fa-info-circle"></i>LOGOUT</a></div>
      </div>
    </div>
    <div class="div1">
       <form method=POST action="" enctype=multipart/form-data>
<table style="  border-spacing: 50px;">
  <tr>
    <td><p>Name</p></td><td><input type=text autofocus value="';if(isset($_POST['name'])){echo $_POST['name'];}
    echo '"placeholder="Name" name="name" class=text required></td>
    <td><p>Enter Username</p></td><td><input type=text placeholder="UserName" value="';if(isset($_POST['fname'])){echo $_POST['fname'];}
    echo '" name="fname" class=text required></td></tr>
    <tr><td><p>Enter Email</p></td><td><input type=email value="';if(isset($_POST['email'])){echo $_POST['email'];}
    echo '" placeholder=Email name=email class=text required></td>
   <td><p>Enter Phone no</p></td><td><input type=number maxlength="10" placeholder=Phone value="';if(isset($_POST['phone'])){echo $_POST['phone'];}
    echo '" Number name=phone class=text required></td></tr>
    <tr><td><p>Load Image</p></td><td><input type=file name=image class=file required></td>
    <td><p>Enter Institution</p></td><td><input type="text" placeholder="institute" value="';if(isset($_POST['inst'])){echo $_POST['inst'];}
    echo '" name="inst" class=text required></td></tr>
    <tr><td><p>Enter address</p></td><td><input type="text" value="';if(isset($_POST['add'])){echo $_POST['add'];}
    echo '" placeholder="Address" name="add" class=text required></td>
      <td><p>Enter Register no</p></td><td><input type="text" placeholder="RegisterNo" value="';if(isset($_POST['regino'])){echo $_POST['regino'];}
    echo '" name="regino" class=text required></td></tr>
 <tr><td><p>Enter Class</p></td><td><input type=text placeholder="class" value="';if(isset($_POST['class'])){echo $_POST['class'];}
    echo '" name="class" class=text required></td>
     
     </div></td></tr>
     <tr><td colspan="2"></td>
    <td colspan="2"><input type="submit" name="submit" class="btn2" align="center"></td></tr>
</table>
 </form>';

  $db =mysqli_connect("localhost", "root", "", "campus");
  $msg = "";
  if (isset($_POST['submit'])) 
  {
    $image = $_FILES['image']['name'];
    $username=$_POST['fname'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['add'];
    $inst=mysqli_real_escape_string($db,$_POST['inst']);
    $class=$_POST['class'];
    $regino=$_POST['regino'];
    $target = "images/".basename($image);
    $pass=$phone/10000;
    $passwor=round($pass);
    $password=$passwor."@".$username;
    $qry="select * from student where username='$username'||regino='$regino'";
    $rslt=$db->query($qry);
    if($rslt->num_rows==0)
    {
        $qry="insert into student(username,password,name,email,phone,address,institute,class,regino,image) values('$username','$password','$name','$email','$phone','$address','$inst','$class','$regino','$image')";
        $rslt=$db->query($qry);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        
          
        echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Student Register',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='add_student.php' })</script>";
        $to_email = $email;
        $subject = "CAMPUS TRAINEE LOGIN";
        $body = "Hi ".$name.",Your login details are       username:".$username."   password:".$password;
        $headers = "From: rajath2322@gmail.com";
        if (mail($to_email, $subject, $body, $headers)){
           
        }
        $username="";
          $name="";
          $email="";
          $password="";
          $phone="";
          $address="";
          $inst="";
          $class="";
          $regino="";
    }
    else
    {
      echo"<script>Swal.fire({                             
                              icon: 'warning',
                              title: 'username or regino already exist',
                              showConfirmButton: false,
                              timer: 2000
                            })</script>";
    }
  }
  ?>   
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
$(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
</script>
</body>
</html>



