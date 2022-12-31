<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="sweetalert.js"></script>
</head>
<body>

</body>
</html>
<?php 
@$cn=new mysqli('localhost','root','','campus');
$question_id=$_GET['question_id'];
$staff_id=$_GET['staff_id'];
echo $question_id;
$qry1="select * from exam where question_id='$question_id'";
$rslt1=$cn->query($qry1);
while($r1=$rslt1->fetch_assoc())
{
$type=$r1['type'];
}
if($rslt1){
	echo"h";
   $qry="delete from exam where question_id='$question_id'";
	$rslt=$cn->query($qry);
	if($rslt){
		echo"<script>Swal.fire({ 
                      icon: 'error',
                      title: 'Question Deleted',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='add_question.php?staff_id=".$staff_id."&&type=".$type."' })</script>";
	
}
}
?>