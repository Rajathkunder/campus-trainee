<?php
$type=$_GET['type'];
$question_id=$_GET['question_id'];
@$cn=new mysqli('localhost','root','','campus');
	if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    $qry1="select exam_id from examset order by exam_id desc limit 1";
    $rslt1=$cn->query($qry1);
    $r1=$rslt1->fetch_assoc();
    $exam_id=$r1['examid_id']+1;
    $qry="insert into exam_questions(question_id,exam_id) values('$question_id','$exam_id')";
    $rslt=$cn->query($qry);
    if($rslt)
    {
    	echo'<script>window.location.href="add_test.php?type='.$type.'";</script>';
    } 
?>