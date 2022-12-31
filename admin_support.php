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
      padding-left: 580px;
      padding-top: 14px;
      margin-top: 8px;
      font-size: 40px;
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
  transition: all .5s ease;
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
.support_cont{
  position: relative;
  left: 300px;
  width: 60%;
  height: 673px;
  background: rgb(35, 51, 64);
  overflow-y: scroll;
  align-content: center;
  align-items: center;
}
.support_cont h1{
  color: white;
  align-content: center;
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
      margin-left: 65px;
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
    .item1{
  position: relative;
  cursor: pointer;
  margin-top: 30px;
  border: 2px solid black;

}
.item1 a{
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  display: block;
  padding: 5px 30px;
  line-height: 60px;
}
.item1 a:hover{
  background: #8621F8;
  transition: 0.3s ease;
}
.item1 i{
  margin-right: 15px;
}
.item1 a .dropdown{
  position: absolute;
  right: 0;
  margin: 20px;
  transition: 0.3s ease;
}
.item1 .sub-menu{
  background: rgba(255, 255, 255, 0.1);
  display: none;
  height: 370px;
}
.item1 .sub-menu .msgbox{
  position: relative;
      height: 330px;
      width: 380px;
      background-color: #031947;
      color: white;
      border-radius: 10px;
      overflow-y: scroll;
     
    }
    .msg{
      position: relative;
      height: 380px;
      width: 380px;
      background-color: #031947;
      color: white;
      border-radius: 10px;
      border: 1px solid black;
      left: 200px;
    }
    .fnt{
      font-size: 18px;
    }
    .msgtext{
      height: 44px;
      width: 300px;
      font-size: 18px;
      border-radius: 10px;
    }
    .send{
      height: 44px;
      width: 70px;
      border-radius: 10px;
    }
    .support_cont h1{
      margin-left: 400px;
      padding-top: 10px;
    }
    td{
      width: 300px;
      padding-right: 100px;
      font-size: 20px;
    }
    h2{
      color: lightblue;
      margin-left: 40px;
    }
    .span{
      padding-left: ;
    }
  </style>

</head>
<body>
  <?php
    $sup=0;
    $st=0;
    @$cn=new mysqli('localhost','root','','campus');
    $qry="SELECT * FROM `student`";
    $rslt=$cn->query($qry);
    
    echo'
  <div class="content1">
<center> <h1 id="headi">SUPPORT</h1></center>
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

    <div class="support_cont">';

    echo' 
    
      <h1>STUDENT</h1>';
      while($r1=$rslt->fetch_assoc())
      {
      $username=$r1['username'];
      $qry1="select * from stud_support where username='$username'";
      $result=$cn->query($qry1);
      while($r2=$result->fetch_assoc())
      {
        if($r2['replay']=='')
        {
          $sup=1;
          $st=1;
        }
      }
      if($sup==1){
     echo'
      <div class="item1">
          <a class="sub-btn"><table><tr><td><span class="span">'.$r1['name'].'</span></td><td><span class="span">'.$r1['regino'].'</span></tr></table><i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <div class="msg">
              <div class="msgbox">';
                        $q="select * from stud_support where username='$username'";
                        $resul=$cn->query($q);
                       while($r3=$resul->fetch_assoc())
                      {
                      echo'
                      <div id="talkbubble1"><p class="fnt">'.$r3['send'].'</p></div>';
                            if($r3['replay']!='')
                            {
                              echo'
                              <div id="talkbubble2"><p class="fnt">'.$r3['replay'].'</p></div>';

                            }
                    }
                        
              echo'
              </div>
              <form method="POST" action="replaystud.php?username='.$username.'">
              <input type="text" name="replay" class="msgtext" name="">
              <input type="submit" name="submit" class="send" value="replay">
              </form>
            </div>
          </div>
      </div>';
    }
      $sup=0;
    }
    if($st==0){
      echo"<h2>There is no student query</h2><br>";
    }
    echo'
    <hr>
    <h1>STAFF</h1>';
    $su=0;
    $s=0;
    $qr="SELECT * FROM `staff`";
    $staf=$cn->query($qr);
      while($rs=$staf->fetch_assoc())
      {
      $username=$rs['staff_id'];
      $qry3="select * from staff_support where staff_id='$username'";
      $resul=$cn->query($qry3);
      while($r3=$resul->fetch_assoc())
      {
        if($r3['replay']=='')
        {
          $su=1;
          $s=1;
        }
      }
      
      if($su==1){
     echo'
      <div class="item1">
          <a class="sub-btn"><span class="span">'.$rs['name'].'</span><span class="span">'.$rs['staff_id'].'</span><i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <div class="msg">
              <div class="msgbox">';
                        $qs="select * from staff_support where staff_id='$username'";
                        $resuls=$cn->query($qs);
                       while($r4=$resuls->fetch_assoc())
                      {
                      echo'
                      <div id="talkbubble1"><p class="fnt">'.$r4['send'].'</p></div>';
                            if($r4['replay']!='')
                            {
                              echo'
                              <div id="talkbubble2"><p class="fnt">'.$r4['replay'].'</p></div>';

                            }
                    }
                        
              echo'
              </div>
              <form method="POST" action="replaystaff.php?staff_id='.$username.'">
              <input type="text" name="replay" class="msgtext" name="">
              <input type="submit" name="submit" class="send" value="replay">
              </form>
            </div>
          </div>
      </div>';
    }
      $su=0;
    }
    if($s==0){
      echo"<h2>There is no staff query</h2>";
    }
    echo'
      
      ';
    
      echo'
    </div>';
    ?>
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