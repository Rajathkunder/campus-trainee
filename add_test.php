<?php
$type=$_GET['type'];
$staff_id=$_GET['staff_id'];
 @$cn=new mysqli('localhost','root','','campus');
	if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
    $qry="select * from exam where type='$type'";
    $rslt=$cn->query($qry);
    echo'<html>
    <head>
    <style>
    *{
      font-size: 20px;
      color:white;
      background:#042331;
    }
    h1{
      text-transform:uppercase;
      margin-left:200px;
      font-size:30px;
    }
    .container{
      background: transparent;
      border:2px solid green;
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
      border-bottom: 1px solid blue;
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
  
    .container{
      border-radius:5px;
     border: 5px outset #696969;
        overflow-y: scroll;
        max-height:87%;
        scrollbar-color:red;
    }
    .next{
      float: right;
    margin-top: 20px;
    margin-right: 210px;
    padding: 5px;
    padding-right: 10px;
    padding-left: 10px;
    border: 5px outset #696969;
    color:lightblue;
    cursor:pointer;
    height:50px;
    width:90px;
    font-size:22px;
    }
    .cancel{
      
      float: right;
    margin-top: 0px;
    margin-right: 90px;
    padding: 5px;
    padding-right: 10px;
    padding-left: 10px;
    border: 5px outset #696969;
    color:lightblue;
    cursor:pointer;
    height:50px;
    width:100px;
    font-size:20px;
    }
    .back{
      
      float: left;
    margin-top: 0px;
    margin-right: 90px;
    padding: 5px;
    padding-right: 10px;
    padding-left: 10px;
    border: 5px outset #696969;
    color:lightblue;
    cursor:pointer;
    height:50px;
    width:100px;
    font-size:20px;
    }
    
    .dlt1{
      margin-right:50px;
      float:right;
      font-size:25px;
      padding-left:15px;
      padding-right:15px;
      color:green;
      background:red;
      border:2px solid red;
      height:35px;
      width:50px;
      border:2px solid green;
    }
    .dlt2{
      margin-right:50px;
      float:right;
      font-size:25px;
      padding-left:15px;
      padding-right:15px;
      background-color:#3ed23e;
      border:2px solid red;
    }
    td{
      width:600px;
    }
    .td1{
      width:1500px;
    }
    .ff{
      background-color:transparent;
border: 3px outset #696969;

    }

    p{
      margin-left:90px;
      margin-top:30px;
    }
    .qst{
      font-size:25px;
      margin-left:200px;
    }
    .add{
      margin-left:200px;
      margin-top:30px;
      background:white;
      color:black;
    }
    </style>
    <body>
    <h1>'.$type.'</h1>';
    if($rslt->num_rows==0)
    {
      echo'<br><button onclick=window.location.href="select_concept.php?staff_id='.$staff_id.'" class="black">BACK</button><span class="qst">There is no questions</span>';
      
      
    }
    else
    {
    $qry2="select * from selected_questions";
    $rslt2=$cn->query($qry2);
    $rslt2=$rslt2->num_rows;
    
    echo'<form action="" method="POST" name="myform">';
    echo'<div class="container">';
    $i=1;
    while($r=$rslt->fetch_assoc())
				{
          echo'<div class="ff"><table><tr><td class="td1"><span class="question"><b>Q. '.$i.'&nbsp;&nbsp;</b>'.$r['description'].'</span></td><td>
          <input type="checkbox" id="check" onclick="count()" name="question'.$i.'" value="'.$r['question_id'].'" class="dlt1"></td></tr></table><table>
              <tr><td><span class="option">a.&nbsp;&nbsp;'.$r['option_a'].'</span></td><td><span class="option">b.&nbsp;&nbsp;'.$r['option_b'].'</span></td></tr>
              <tr><td><span class="option">c.&nbsp;&nbsp;'.$r['option_c'].'</span></td><td><span class="option">d.&nbsp;&nbsp;'.$r['option_d'].'</span>
              </td></tr><tr><td><span class="option">answer.&nbsp;&nbsp;'.$r['answer'].'</span></td></tr></table></div>';
              $i=$i+1;
				}
        echo'</div>
        
        <input type="submit" name="submit" class="next" value="NEXT">
        
        </form>
      ';
      echo'  <button onclick=window.location.href="select_concept.php?staff_id='.$staff_id.'" class="cancel">CANCEL</button>';
    }
        if(isset($_POST['submit']))
        {
          $exam_id=1;
          $qry1="select exam_id from exam_set order by exam_id desc limit 1";
          $rslt1=$cn->query($qry1);   
          if($rslt1->num_rows>0)
          {
              $r1=$rslt1->fetch_assoc();
              $exam_id=$r1['exam_id']+1;
           }
          else
          {
             $exam_id=1;
          }
          $qry="insert into exam_set(exam_id,staff_id) values('$exam_id','$staff_id')";
          $rslt=$cn->query($qry);
          $k=1;
          for($k=1;$k<$i;$k++)
          {
                $qtn='question'.$k;
                if(isset($_POST["$qtn"]))
                 { 
                        $question=$_POST["$qtn"];
                        $qry2="insert into selected_questions(question_id,exam_id) values('$question','$exam_id')";
                        $rslt2=$cn->query($qry2);
                        echo'<script>window.location.href="set_time.php?staff_id='.$staff_id.'&&type='.$type.'"</script>';
                }
          
          }
        }
        echo'
        <script>
        var t = document.querySelector("#ncount");
        var check= document.getElementById("check");
        function count(){
  
  if(check.checked==true)
  {
  t.value = parseInt(t.value) + 1;
  }
  else if(check.checked==false)
  {
    t.value = parseInt(t.value) - 1;
  }
}
        </script>
        </body></html>';


?>