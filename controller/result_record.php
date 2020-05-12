<?php
require('./db.con.php');
if ($connection) {
    $reg_no = $_POST['user_name'];
    $email;
    $q= "SELECT * FROM `registration` WHERE `registration_no` ='$reg_no'";
    $d =mysqli_query($connection ,$q);
    if(mysqli_num_rows($d)>0){
        while($rows = mysqli_fetch_assoc($d))
        {
            $email= $rows['user_email_address'];
            $user_id = $rows['user_id'];
        }
    }
    $result = $_POST['result']; 
    $time_stamp = $_POST['timestamp'];
    $query = "SELECT * FROM `registration` WHERE `user_email_address`='$email'";
    $data = mysqli_query($connection, $query);
    if (mysqli_num_rows($data) >= 1) {
        $row = mysqli_fetch_assoc($data);
        $name= $row['user_name'];
        $insert_query = "INSERT INTO `result`(`user_id`,`exam_date`,`user_result`) VALUES ('$user_id','$time_stamp','$result')";  
        $record_Saved_data = mysqli_query($connection, $insert_query);
        if ($record_Saved_data) {
            require 'PHPMailerAutoload.php';
            require 'credential.php';
            $mail = new PHPMailer;
            $mail->SMTPDebug = 1;                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                              // Enable SMTP authentication
            $mail->Username = EMAIL;                 // SMTP username
            $mail->Password = PASS;                           // SMTP password
            $mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->setFrom(EMAIL, 'Online Aptitude');
            $mail->addAddress($email);         // Name is optional
            $mail->addReplyTo(EMAIL);
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'CERTIFICATION LINK';
            //$mail->Body    = 'Dear Candidate Click on following link get your Certificate <a href="http://localhost/aptitude_test/view/certificate.php?name="'.$name.'&marks="'.$result.'">Click here</a>';
            $mybody = "Dear Candidate Click on following link get your Certificate <a href='".BASEPATH."aptitude_test/view/certificate.php?name=".$name."&marks=".$result."'>Click here</a>";
            $mail->Body = $mybody;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
            //exit;
            header('LOCATION: ../view/specific_student_result.php');
        } else {
            echo "Error While Insering data in database";
        }
    }
}