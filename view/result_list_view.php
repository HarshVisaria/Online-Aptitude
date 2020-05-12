<?php require("header.php");
if (isset($_SESSION["user_id"])) {
    if ($_SESSION["user_id"] == 'admin') {
?>
        <h5 class="mt-3 mb-2 text-center">Result List View</h5>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Student Name</td>
                    <td>Marks</td>
                </tr>
            </thead>
            <tbody>

                <?php
                require('../controller/db.con.php');
                $sql = "SELECT * FROM `result`";
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['result_id'] ?></td>
                            <?php $id = $row['user_id'];
                            $sql = "SELECT * FROM  `registration` WHERE `user_id`='$id'";
                            $name = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($name)) {
                                while ($user = mysqli_fetch_assoc($name)) { ?>
                                    <td title="<?php echo $user['user_email_address']; ?>">
                                        <?php echo $user['user_name']; ?>
                                <?php }
                            }
                                ?>
                                    </td>
                                    <td><?php echo $row['user_result'] ?></td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
<?php
    }
    else{
        header("LOCATION: ./home.php");

    }
} else {
    header("LOCATION: ../admin_login.php");
}
require("footer.php"); ?>