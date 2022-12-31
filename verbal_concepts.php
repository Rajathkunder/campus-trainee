<!DOCTYPE html>
<html>
<head>
	<title>choose test</title>
	<style type="text/css">
.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 60px;
  box-shadow: 1px 1px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }
.button::before {
content: '';
  border-radius: 10px;
  min-width: calc(400px + 690px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}
.bon1::before {
content: '';
  border-radius: 40px;
  min-width: calc(60px + 50px);
  min-height: calc(12px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 4%;
  left: 6.5%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}
.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}



		.bon1{
 margin-left: 30px;
 width: 120px;
 height: 40px;
 border-radius: 30px;
 background-color: black;
 margin-top: 2px;
 color: white;
}
		body{
		background-color: black;
		}
		.button {
    width: 1100px;
    height: 85px;
    margin-right: 10px;
    margin-left: 220px;
    position: relative;
    border-radius: 20px;
    margin-top: 29px;
    background-image: linear-gradient(to left,black,black);

     
}
.container{
	margin-top: 0px;
}
.buttonText
{
    font-size: 30px;
    position: ;
    top: 10px;
    left: 39px;
    padding-top: 5px;
    margin-left: 20px;
    color: white;
    font-weight: 30px;
    font-family: sans-serif;
    background-color: black;
    margin-top: 3px;
    height:50px;
    width: 1040px;
    letter-spacing: 2px;
    }
#buttonText1
{
    font-size: 20px;
    position: absolute;
    top: 22px;
    left: 809px;
    color: black;
}

.h{
  margin-top: 5px;

  }

	</style>

</head>
<body>
  <?php
  $username=$_GET['username'];
  echo'
	 <button class="bon1" onclick=window.location.href="take_test.php?username='.$username.'">BACK</button>
	<div class="container">';
  ?>

<button class='button' onclick="window.location.href='addstudent.html'">
    <div class="buttonText"><p class='h'>ANTONYMS AND SYNONYMS</p></div>
    
    </button>
<button class='button' onclick="window.location.href='addstudent.html'">
    <div class="buttonText"><p class='h'>IDIOMS AND PHRASES</p></div>
    
    </button>
    <button class='button' onclick="window.location.href='addstudent.html'">
    <div class="buttonText"><p class='h'>ERROR DETECTION</p></div>
    
    </button>
    <button class='button' onclick="window.location.href='addstudent.html'">
    <div class="buttonText"><p class='h'>ONE WORD SUBSTITUTE</p></div>
    
    </button>
    <button class='button' onclick="window.location.href='addstudent.html'">
    <div class="buttonText"><p class='h'>JUMBLED WORDS</p></div>
    
    </button>
   <button class='button' onclick="window.location.href='addstudent.html'">
    <div class="buttonText"><p class='h'>VOCABULARY AND GRAMMER</p></div>
   
    </button>
</div>

    
</body>
</html>