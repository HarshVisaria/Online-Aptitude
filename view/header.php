<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app-assets/css/bootstrap.css">
    <script src="../app-assets/js/jquery.js"></script>
    <link rel="stylesheet" href="../app-assets/css/confirm.css">
    <title>Online Aptitude Test</title>
    <style>
        .cursor-pointer {
            cursor: pointer;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
    <a class="navbar-brand text-white" href="#">Online Aptitude Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <?php
            session_start();
            if ($_SESSION['user_id'] == "admin") {

            ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./adminpanel.php">Add Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./addstudent.php">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./question_list_view.php">Display</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./students.php">Student List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./result_list_view.php">Results</a>
                </li>
                <li class="nav-item cursor-pointer" id="set_time" data-toggle="modal" data-target="#set_time_modal">
                    <a class="nav-link text-white">Set Time</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./specific_student_result.php">All Results</a>
                </li>

            <?php }
            ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="../controller/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <div class="modal fade text-left" id="set_time_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18"><i class="la la-tree"></i>Set Time</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="../controller/time_set.php" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="time" class="mt-1">
                                    Set Time
                                </label>
                            </div>
                            <div class="col-md-8">
                                <?php
                                require('../controller/db.con.php');
                                $sql = "SELECT * FROM `set_time`";
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <input type="text" name="time" id="name" class="form-control" value="<?php echo $row['time_in_sec'] ?>">
                                <?php }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-outline-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>