<html>
<script src="sweetalert.js"></script>
<head></head>
<body>
<?php 
$type=$_GET['type'];
$staff_id=$_GET['staff_id'];
@$cn=new mysqli('localhost','root','','campus');
    if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
     $question=$_POST['question'];
    $sp=0;
    $select="select * from exam";
    $result=$cn->query($select);
    while($row=$result->fetch_assoc()){
      if($question==$row['description'])
      {
        $sp=1;
      }
    }
	$qry1="select question_id from exam order by question_id desc limit 1";
	$rslt1=$cn->query($qry1);
	$r1=$rslt1->fetch_assoc();
	$qtnid=$r1['question_id']+1;
   
    $option_a=$_POST['option_a'];
    $option_b=$_POST['option_b'];
    $option_c=$_POST['option_c'];
    $option_d=$_POST['option_d'];
    $answer=$_POST['answer'];
    if($option_a==$option_b||$option_a==$option_c||$option_a==$option_d||$option_b==$option_c||$option_b==$option_d||$option_c==$option_d)
    {
      echo"
      <script>Swal.fire({ 
                      icon: 'warning',
                      title: 'Same option',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='add_question.php?staff_id=".$staff_id."&&type=".$type."' })</script>";
    }
    elseif ($sp==1) {
      echo"
      <script>Swal.fire({ 
                      icon: 'warning',
                      title: 'Question already exist',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='add_question.php?staff_id=".$staff_id."&&type=".$type."' })</script>";
    }
    else{
      
    $qry="insert into exam(question_id,type,description,option_a,option_b,option_c,option_d,answer) values(".$qtnid.",'".$type."','".$question."','".$option_a."','".$option_b."','".$option_c."','".$option_d."','".$answer."')";
    $rslt=$cn->query($qry);
    if($rslt){
      echo"
      <script>Swal.fire({ 
                      icon: 'success',
                      title: 'question added',
                      showConfirmButton: false,
                      timer: 2000
                    }).then((result) => { window.location.href='add_question.php?staff_id=".$staff_id."&&type=".$type."' })</script>";
            }
          }
?>
</body>
</html>