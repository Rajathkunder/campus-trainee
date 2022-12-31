<?php
$type=$_GET['type'];
$staff_id=$_GET['staff_id'];
 @$cn=new mysqli('localhost','root','','campus');
	if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
echo'<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background:#042331;
			color:white;
		}
		h1{
			text-transform:uppercase;
			margin-left:100px;
		}
		*{
			font-size: 20px;
			font-family:Arial,Helvetica,sans-serif;
			color:white;
		}
		.container{
			background: transparent;
		  margin-top:-20px;
			width: 1300px;
			align-items: center;
			margin-left: 100px;

		}
		.question{
			margin-left: 20px;
		}
		.question input{
			width: 1200px;
			border: none;
			border-bottom: 1px solid black;
			outline: none;
			background: transparent;
		}
		
		.option{
			top: 30px;
			padding-left: 100px;
		}
		.answer{
			padding-left: 20px;
		}
		.option input, .answer input{
			width: 400px;
			border: none;
			border-bottom: 1px solid black;
			outline: none;
			background: transparent;

		}
		.btn{
			margin-top: 10px;
			margin-left: 20px;
			height: 40px;
			width: 100px;
			background:transparent;
			border:2px solid white;
			border-radius:5px;
			border: 5px outset #696969;
			margin-left:1070px;
			cursor:pointer;

		}
		.dispq{
			background:#031a25;
			border-radius:15px;
			border:3px solid black;
			max-height: 470px;
 		    overflow-y: scroll;


		}
		.dlt{
			float:right;
		}
		td{
			width:500px;
		}
		.td1{
			width:1100px;
		}
		.td2{
			width:200px;
		}
		
		.dlt{
			background:transparent;
			color:red;
			border:none;
			border: 5px outset #696969;
		border-radius:2px;
			cursor:pointer;
			margin-top:17px;
		}
		
		.update{
			
			background:transparent;
			color:lightblue;
			border:none;
			border: 5px outset #696969;
		border-radius:2px;
			cursor:pointer;
			margin-left:1090px;
			margin-top:-19px;
		}
		select{
			background:transparent;
			border:none;		
		}
		option{
			background:#031a25;
		}
		.back{
			background:transparent;
			padding-left:10px;
			padding-right:10px;
			background:transparent;
			
			border-radius:5px;
			border: 5px outset #696969;
			
			cursor:pointer;
		}
		.ff{
			background-color:transparent;
border: 3px outset #696969;

		}

	</style>
</head>
<body>
<button class="back" onclick=window.location.href="addtest.php?staff_id='.$staff_id.'">BACK</button>
	<div class="container">
	<h1>'.$type.'</h1>';
			$qry="select * from exam where type='$type'";
			$rslt=$cn->query($qry);

			if($rslt->num_rows)
			{echo'
				<div class="dispq">';
				$i=1;
				while($r=$rslt->fetch_assoc())
				{
					echo' <div class="ff"<table><tr><td class="td1"><span class="question"><b>Q.'.$i.'</b>&nbsp;'.$r['description'].'</span></td><td class="td2"><button value="Delete" class="dlt" onclick=window.location.href="deleted_question.php?question_id='.$r['question_id'].'&&staff_id='.$staff_id.'">Delete</button><br><button class="update" onclick=window.location.href="update_question.php?question_id='.$r['question_id'].'&&staff_id='.$staff_id.'">Update</button></td></tr></table><br><br>
					<table><tr><td><span class="option">a.&nbsp;&nbsp;'.$r['option_a'].'</span></td><td><span class="option">b.&nbsp;&nbsp;'.$r['option_b'].'</span></td><tr><tr><td>
					<span class="option">c.&nbsp;&nbsp;'.$r['option_c'].'</span></td><td><span class="option">d.&nbsp;&nbsp;'.$r['option_d'].'</span></td></tr><tr><td>
					<span class="option">answer:&nbsp;&nbsp;'.$r['answer'].'</span></td></tr></table></div>';
					$i=$i+1;
				}
				echo'</div>';
			}		
		echo'
	
	<div class="qtn">
		<form method="POST" action="confirm_add_question.php?staff_id='.$staff_id.'&&type='.$type.'">
			<br><span class="question">Q. <input type="text" name="question" placeholder="Enter the question" required rows=3></span><br><br>
			<span class="option">a. <input type="text" required placeholder="Enter option" name="option_a"></span><span class="option">b. <input type="text" placeholder="Enter option" required name="option_b"></span><br><br>
			<span class="option">c. <input type="text" required placeholder="Enter option" name="option_c"></span><span class="option">d. <input type="text" placeholder="Enter option" required name="option_d"></span><br><br>
			<span class="answer">select answer <select id="answer" required name="answer"><option value="a">a</option><option value="b">b</option><option value="c">c</option><option value="d">d</option></select></span><br>
			<input type="submit" class="btn" name="submit" value="ADD">
		</form>
	</div>
</div>
<script>
function dlt(r1,r6) {
    // body...
    var r2="deleted_question.php?question_id=";
    var r3=r2.concat(r1);
    var r4="&&staff_id=";
    var r5=r3.concat(r4);
    var r7=r5.concat(r6);
    window.location.href=r7;
    
  }
  function update(r1) {
    // body...
    var r2="update_question.php?question_id=";
    var r3=r2.concat(r1);
    window.location.href=r3;
    
  }
</script>
</body>
</html>';
?>