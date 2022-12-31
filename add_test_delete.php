<?php
$type=$_GET['type'];
$question_id=$_GET['question_id'];
@$cn=new mysqli('localhost','root','','campus');
	if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    $qry="delete from exam_questions where question_id='$question_id'";
    $rslt=$cn->query($qry);
    if($rslt)
    {
    	echo'<script>window.location.href="add_test.php?type='.$type.'";</script>';
    } 
?>