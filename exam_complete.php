<html>
<head></head>
	<script src="sweetalert.js"></script>
<body>

<?php 
@$db=new mysqli('localhost','root','','campus');
$count=$_GET['count'];


$username=$_GET['username'];
$exam_id=$_GET['exam_id'];
$question_list="";
$answer="";
$totalatt=0;
$questions_list1="";
	$total=0;
	$qry4="select * from selected_questions where exam_id='$exam_id'";

	$rslt4=$db->query($qry4);
	while($r4=$rslt4->fetch_assoc()){
		$qusn=$r4['question_id'];
		$questions_list1=$questions_list1.$qusn.",";
	}
	
    $question1=strtok($questions_list1,",");
			while($question1!="")
			{
				$question1=strtok(",");
				$total=$total+1;
			}
			$qry5="select * from student_ans where exam_id='$exam_id' && username='$username'";
			$rslt5=$db->query($qry5);
			$r5=$rslt5->fetch_assoc();
			$questions1=$r5['question_list'];
			$answer1=$r5['answer'];
			$total_question1=array();
			$count_question1=0;
			$question2=strtok($questions1,",");
			while($question2!="")
			{
				array_push($total_question1,$question2);
				$question2=strtok(",");
				$count_question1=$count_question1+1;
			}
			
			$total_answer=array();
			$count_answer=0;
			$answer2=strtok($answer1,",");
			while($answer2!="")
			{
				array_push($total_answer,$answer2);
				$answer2=strtok(",");
				$count_answer=$count_answer+1;
			}
			$result=0;
			for($k=0;$k<$count_question1;$k++){
				$question_id1=$total_question1[$k];
				$ans=$total_answer[$k];
				if($ans!='n'){
					$totalatt=$totalatt+1;
				}
				$qry6="select * from exam where question_id='$question_id1'";
				$rslt6=$db->query($qry6);
				$r6=$rslt6->fetch_assoc();
				$type=$r6['type'];
				$ans1=$r6['answer'];
				if($ans==$ans1){
					$result=$result+1;
				}
}
$percentage=($result*100)/$total;
$percentage=round($percentage,2);
$qry7="insert into result values('$username','$percentage','$totalatt','$total','$result','$type','$exam_id')";
$rslt7=$db->query($qry7);
echo"<script>Swal.fire({ 
                      icon: 'success',
                      title: 'Test Completed',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='student_interface.php?username=".$username."' })</script>";
?>
</body>
</html>