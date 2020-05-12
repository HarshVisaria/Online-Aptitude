<?php
require('./db.con.php');
$reg_no = $_POST['reg_no'];
$dob = $_POST['dob'];
$query = "SELECT * FROM `registration` WHERE `registration_no` = '$reg_no'";
$data = mysqli_query($connection, $query);
if(mysqli_num_rows($data)>0)
{
    header("LOCATION: ../view/addstudent.php?existed=true");
}
else{
    $sql = "INSERT INTO `registration` (`registration_no`,`dob`) VALUES ('$reg_no' , '$dob')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("LOCATION: ../view/addstudent.php?insert=successful");
    } else {
        header("LOCATION: ../view/addstudent.php?insert=failed");
    }
}
?>