<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ONLINE APTITUDE TEST</title>
    <link rel="stylesheet" href="./app-assets/css/registration.css">
</head>

<body>
    <div class="box1">
        <h2>Registration</h2>
        <form class="" action="./controller/registration_handler.php" method="post">
            <div class="inputbox">
                <input type="text" name="name" id="name" required value="">
                <label for="">Name</label>
            </div>
            <div class="inputbox">
                <input type="text" name="email_address" id="email_address" required value="">
                <label for="">Email id</label>
            </div>
            <div class="inputbox">
                <input type="text" name="contact" id="contact" required value="">
                <label for="">Contact no</label>
            </div>
            <div class="inputbox">
                <input type="password" name="password" id="password" required value="">
                <label for="">Password</label>
            </div>
            <div class="inputbox">
                <input type="password" name="" id="cpassword" required value="">
                <label for="">Confirm Password</label>
            </div>
            <input type="submit" name="" value="Sign up">

        </form>
        <a class="link" href="./login.php">click here to login</a>
    </div>
</body>

</html>