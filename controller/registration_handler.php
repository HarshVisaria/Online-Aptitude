<?php
session_start();
$servername = 'localhost';
$dbname = '2020_aptitude_madan';
$username = 'root';
$password = '';
$connection =  mysqli_connect($servername, $username, $password, $dbname);
if($connection)
{
    // $_SESSION["username"] = $email;
    $name=$_POST['name'];
    $email=$_POST['email_address'];
    $contact=$_POST['contact'];
    $pwd=$_POST['password'];
    $encpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql ="SELECT * FROM `registration` WHERE `user_email_address`='$email'";
    $user_registered=mysqli_query($connection, $sql);
    if (mysqli_num_rows($user_registered) > 0) {
        echo "Email Address is already Registered";
    } 
    else {
        $query = "INSERT INTO `registration`(`user_name`, `user_email_address`, `user_contact_no`, `user_password`) VALUES ('$name','$email','$contact','$encpwd');";
        $data = mysqli_query($connection, $query);
        if ($data) {
            require 'PHPMailerAutoload.php';
            require 'credential.php';
            $mail = new PHPMailer;
            $mail->SMTPDebug = 0;                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                              // Enable SMTP authentication
            $mail->Username = EMAIL;                 // SMTP username
            $mail->Password = PASS;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->setFrom(EMAIL, 'Online Aptitude');
            $mail->addAddress($_POST['email_address']);         // Name is optional
            $mail->addReplyTo(EMAIL);
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $myBody = "Thanks for the registration. Your login details are as follows:- <br/>Email :- ".$email."<br/>Password :- ".$pwd;

            $mail->Subject = 'Registration | Online Aptitude';
            $mail->Body    = $myBody;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                
               
                header("LOCATION: ../login.php");
            }
        } else {
            header("LOCATION: ../signup.php?insert=failed");
        }
    }
}
