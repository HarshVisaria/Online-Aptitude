<?php require("./header.php");
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] == "admin") {
?>
        <?php
        require('../controller/db.con.php');
        //$sql = "SELECT * FROM `question`";
        $sql = "SELECT question.*, category.c_name FROM `question` LEFT JOIN category ON category.c_id = question.c_id";
        $data = mysqli_query($connection, $sql);
        if (isset($_GET['update'])) {
            if ($_GET['update'] == "success") {
                $update = "Question Successfully Updated";
            } else {
                $update = "Update Failed";
            } ?>
            <p><?php echo $update ?></p>
        <?php } ?>
        <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == "success")
                $alert = "Deleted Question Successfully";
            else
                $alert = "Deleteion Failed";
        ?>
            <p><?php echo $alert ?></p>

        <?php }
        ?>
        <div class="mt-3">
            <h4>Question List View </h4>
            <div style="height:500px !important;overflow-y:scroll">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Question #</td>
                            <td>Action</td>
                            <td>Category #</td>
                            <td>Question</td>
                            <td>Option A</td>
                            <td>Option B</td>
                            <td>Option C</td>
                            <td>Option D</td>
                            <td>Ans #</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($data) >= 1) {
                            while ($row = mysqli_fetch_assoc($data)) {
                                echo "<tr>" . "<td>" . $row['q_id'] . "</td>" . "<td><a href=" . './edit_question.php?id=' . $row['q_id'] . ">Edit</a><a class='ml-2' href=" . '../controller/delete_question.php?id=' . $row['q_id'] . ">Delete</a></td>" . "<td>" . $row['c_name'] . "</td>" . "<td>" . $row['q_title'] . "</td>" . "<td>" . $row['op_a'] . "</td>" . "<td>" . $row['op_b'] . "</td>" . "<td>" . $row['op_c'] . "</td>" . "<td>" . $row['op_d'] . "</td>" . "<td>" . $row['ans_id'] . "</td>" . "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php } else {
        header("LOCATION: ./home.php");
    }
} ?>
<?php require("./footer.php") ?>