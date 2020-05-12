<?php
require('../controller/db.con.php');
$sql = "DELETE * FROM `question` WHERE `q_id` = '$id'";
$data = mysqli_query($connection , $sql);
if($data)
{
    header("LOCATION: ../view/question_list_view.php?delete=success");
}
else{
    header("LOCATION: ../view/question_list_view.php?delete=failed");
}
?>