<?php require('header.php');
if (isset($_SESSION['user_id'])) {
?>
    <p>
        <h4 class="mt-5 text-center">Attempted Exams and Results</h4>
    </p>
    <p class="float-right">UIN #: <?php echo $_SESSION['user_id'] ?></p>
    <div class="container mt-3" style="height:400px;overflow-y:scroll">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Attempt #</td>
                    <td>Marks</td>
                    <td>Date</td>
                    <td>Link</td>
                </tr>
            </thead>
            <tbody>
                <?php
                require('../controller/db.con.php');
                require('../controller/credential.php');

                $name = $_SESSION['user_id'];
                $sql = "SELECT * FROM `registration` WHERE `registration_no`='$name'";
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['user_id'];
                        $query = "SELECT * FROM `result` WHERE `user_id`='$id'";
                        $data = mysqli_query($connection, $query);
                        if (mysqli_num_rows($data)) {
                            $index = 1;
                            while ($line = mysqli_fetch_assoc($data)) {
                ?>
                                <tr>
                                    <td><?php echo $index; ?></td>
                                    <td><?php echo $line['user_result'];
                                        ?></td>
                                    <td><?php echo $line['exam_date'];?></td>
                                    <td>
                                    <?php
                                        echo "<a href='".BASEPATH."aptitude_test/view/certificate.php?name=".$row['user_name']."&marks=".$line['user_result']."'>Certificate</a>";
                                    ?>
                                    </td>
                                    <!-- <td><a href="http://localhost/aptitude_test/view/certificate.php?name=<?php echo $row['user_name'] ?>&marks=<?php echo $line['user_result'] ?>">Certificate</a></td> -->
                                </tr>
            <?php $index++;
                            }
                        }
                    }
                }
            }
            ?>

            </tbody>
        </table>
    </div>
    <?php require('footer.php') ?>