<?php
echo json_encode($_POST);
session_start();
$name=$_POST['user_name'];
$password =$_POST['password'];
if ($name == 'admin' && $password == 'admin') {
    $_SESSION['user_id'] = $name;
    header("LOCATION: ../view/adminpanel.php");
}
?>