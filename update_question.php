<?php 
@$cn=new mysqli('localhost','root','','campus');
$question_id=$_GET['question_id'];
$staff_id=$_GET['staff_id'];
$qry="select * from exam where question_id='$question_id'";
$rslt=$cn->query($qry);
$r=$rslt->fetch_assoc();
$type=$r['type'];
echo'<html>
<script src="sweetalert.js"></script>
<style>
	body{
			background:#042331;
			color:white;
		}
		*{
			font-size: 25px;
			font-family:Arial,Helvetica,sans-serif;
			color:white;
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
		.qtn{
			border: 5px outset #696969;
			width:90%;
			margin-left:50px;
			margin-top:100px;
			background:transparent;
		}
		.btn{
			margin-left:500px;
			background:transparent;
			
			border-radius:5px;
			border: 5px outset #696969;
			
			cursor:pointer;
			padding:10px;
		}
		.btn2{
			margin-left:10px;
			background:transparent;
			
			border-radius:5px;
			border: 5px outset #696969;
			padding:10px;
			cursor:pointer;
		}
		select{
			background:transparent;
		}
		option{
			background:#042331;
		}
</style><body>
<div class="qtn">
		<form method="POST" action="">
			<br><span class="question">Q. <input type="text" name="question" value="'.$r['description'].'" rows=3 required></span><br><br>
			<span class="option">a. <input type="text" value="'.$r['option_a'].'" name="option_a" required></span><span class="option">b. <input type="text" value="'.$r['option_b'].'" name="option_b" required></span><br><br>
			<span class="option">c. <input type="text" value="'.$r['option_c'].'" name="option_c" required></span><span class="option">d. <input type="text" value="'.$r['option_d'].'" name="option_d" required></span><br><br>
			<span class="answer">answer <select id="answer" name="answer">';
			if($r['answer']==a)
			{
				echo'<option value="a" selected>a</option>
			<option value="b">b</option>
			<option value="c">c</option>
			<option value="d">d</option>';
			}
			else if($r['answer']==b)
			{
				echo'<option value="a">a</option>
			<option value="b" selected>b</option>
			<option value="c">c</option>
			<option value="d">d</option>';
			}
			else if($r['answer']==c)
			{
				echo'<option value="a">a</option>
			<option value="b">b</option>
			<option value="c" selected>c</option>
			<option value="d">d</option>';
			}
			else
			{
				echo'<option value="a">a</option>
			<option value="b">b</option>
			<option value="c">c</option>
			<option value="d" selected>d</option>';
			}
			
			echo'
			</select></span><br><br><br>
			<input type="submit" class="btn" name="submit" value="Update">
			<input type="submit" class="btn2" name="cancel" value="cancel">
		</form>
	</div>
	</body>
	</html>';
	if(isset($_POST['submit']))
	{
		$question=$_POST['question'];
    $option_a=$_POST['option_a'];
    $option_b=$_POST['option_b'];
    $option_c=$_POST['option_c'];
    $option_d=$_POST['option_d'];
    $answer=$_POST['answer'];
   
    $qry1="UPDATE exam SEt description='$question',option_a='$option_a',option_b='$option_b',option_c='$option_c',option_d='$option_d',answer='$answer' WHERE question_id='$question_id'";
    $rslt1=$cn->query($qry1);
    if($rslt1){
    	echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Updated',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='add_question.php?staff_id=".$staff_id."&&type=".$type."' })</script>";
    	
    	
    }
	}
	if(isset($_POST['cancel']))
	{
		echo'<script>window.location.href="add_question.php?staff_id='.$staff_id.'&&type='.$type.'"</script>';
	}
?>