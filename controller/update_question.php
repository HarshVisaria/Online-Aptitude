<?php
$con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");
$question_id = $_POST['question_id'];
$category = $_POST['category'];
$question = $_POST['question'];
$option_a = $_POST['option_a'];
$option_b = $_POST['option_b'];
$option_c = $_POST['option_c'];
$option_d = $_POST['option_d'];
$ans = $_POST['ans'];
$sql= "UPDATE `question` SET `c_id`='$category',`q_title`='$question',`op_a`='$option_a',`op_b`='$option_b',`op_c`='$option_c',`op_d`='$option_d',`ans_id`='$ans' WHERE `q_id`= $question_id";
$data = mysqli_query($con, $sql);
if($data)
    header("LOCATION: ../view/question_list_view.php?update=success");
else
    header("LOCATION: ../view/question_list_view.php?update=failed");  
?>