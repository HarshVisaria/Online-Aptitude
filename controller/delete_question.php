<?php
$con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");
$id=$_GET['id'];
$sql = "DELETE FROM `question` WHERE `q_id` = '$id'";
$data = mysqli_query($con , $sql);
if($data)
{
    header("LOCATION: ../view/question_list_view.php?delete=success");
}
else{
    header("LOCATION: ../view/question_list_view.php?delete=failed");
}
?>