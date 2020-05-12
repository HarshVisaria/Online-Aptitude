<?php 
require('./db.con.php');
$time = $_POST['time'];
$sql= "UPDATE `set_time` SET `time_in_sec`='$time' WHERE `time_id`=1";
$result = mysqli_query($connection , $sql);
if($result){
    header("LOCATION: ../view/adminpanel.php");
}
else{
    header("LOCATION: ../view/adminpanel.php?set_time=false");
}
?>