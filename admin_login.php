<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ONLINE APTITUDE TEST</title>
    <link rel="stylesheet" href="./app-assets/css/registration.css">
</head>

<body>
    <div class="box1">
        <h2>Admin Login</h2>
        <form class="" action="./controller/admin_login_handler.php" method="post">
            <div class="inputbox">
                <input type="text" name="user_name" required value="">
                <label for="">Email id</label>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required value="">
                <label for="">Password</label>
            </div>
            <?php if (isset($_GET['credential'])) {
                if ($_GET['credential'] == "false") { ?>
                    <p class="notification">Wrong Password</p>
                <?php }
            } else if (isset($_GET['exist'])) {
                if ($_GET['exist'] == "false") { ?>
                    <p class="notification">Not Existed Account</p>
            <?php }
            } ?>
            <input type="submit" name="" value="Login">
        </form>
    </div>
    <script src="./registration.js"></script>
</body>

</html>