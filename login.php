<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ONLINE APTITUDE TEST</title>
    <link rel="stylesheet" href="./app-assets/css/registration.css">
</head>
<body>
    <div class="box1">
        <h2>Login</h2>
        <form class="" action="./controller/login_handler.php" method="post">
            <div class="inputbox">
                <input type="text" name="reg_no" required value="">
                <label for="">Registration No</label>
            </div>
            <div class="inputbox">
                <input type="date" name="dob" required value="">
                <label for=""></label>
            </div>
            <?php if(isset($_GET['credential'])){
                if($_GET['credential'] == "false"){?>
                    <p class="notification">Wrong Password</p>
                <?php }
            }
            else if (isset($_GET['exist'])) {
                if ($_GET['exist'] == "false") { ?>
            <p class="notification">Not Existed Account</p>
                <?php } }?>
            <input type="submit" name="" value="Login">
        </form>
    </div>
    <script src="./registration.js"></script>
</body>

</html>