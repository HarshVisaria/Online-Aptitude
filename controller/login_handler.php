<?php
    session_start();
    require('./db.con.php');
    $reg_no = $_POST['reg_no'];
    $dob=$_POST['dob'];
    $query = "SELECT * FROM `registration` WHERE `registration_no`='$reg_no'";
    $data = mysqli_query($connection,$query);
    if($reg_no=='admin' && $dob=='admin')
    {
        $_SESSION['user_id'] = $reg_no;
        header("LOCATION: ../view/adminpanel.php");
    }
    else if(mysqli_num_rows($data)>=1)
    {
        $rows = mysqli_fetch_assoc($data);
        if ($rows['dob']==$dob) {
            $_SESSION['user_id'] = $reg_no;
            header("LOCATION: ../view/landing.php");
        }
        else{
            header("LOCATION: ../login.php?credential=false");
        }
    }
    else{
        header("LOCATION: ../login.php?exist=false");
    }
?>