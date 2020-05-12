<?php
$con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");
$category=$_POST['category'];
$question = $_POST['question'];
$option_a= $_POST['option_a'];
$option_b = $_POST['option_b'];
$option_c = $_POST['option_c'];
$option_d = $_POST['option_d'];
$ans = $_POST['ans'];
$sql= "INSERT INTO `question`(`c_id`, `q_title`, `op_a`, `op_b`, `op_c`, `op_d`, `ans_id`) VALUES ('$category','$question','$option_a','$option_a','$option_a','$option_d','$ans')";
// echo  $sql;exit;
$data=mysqli_query($con , $sql);
if($data){
    header("LOCATION: ../view/adminpanel.php?insert=success");
} 
else{
    header("LOCATION: ../view/adminpanel.php?insert=failed");
}
?>