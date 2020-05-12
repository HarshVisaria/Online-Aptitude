<?php 
    require('./db.con.php');
    $reg_no = $_POST['reg_no'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact = $_POST['contact'];
    $query="SELECT * FROM `registration` WHERE `user_email_address`='$email'";
    $data = mysqli_query($connection,$query);
    if(mysqli_num_rows($data)>0){
        header("LOCATION: ../view/landing.php?exist=true&update=invaalid");
    }
    else{
        $sql = "UPDATE `registration` SET `user_name`='$name' , `user_email_address`='$email', `user_contact_no`='$contact' WHERE `registration_no` = '$reg_no'";
        $result = mysqli_query($connection, $sql);
        if ($result){
            header("LOCATION: ../view/home.php");
        } else {
            header("LOCATION: ../view/landing.php?update=false");
        }
    }
?>