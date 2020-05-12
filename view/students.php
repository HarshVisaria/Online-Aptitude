<?php require("header.php");
if (isset($_SESSION["user_id"])) {
    if ($_SESSION["user_id"] == "admin") {
?>
        <h5 class="mt-3 mb-2 text-center">Student List View</h5>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Reg No</td>
                    <td>Name</td>
                    <td>Email ID</td>
                    <td>DOB</td>
                    <td>Contact #</td>
                </tr>
            </thead>
            <tbody>

                <?php
                require('../controller/db.con.php');
                $sql = "SELECT * FROM `registration`";
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['registration_no'] ?></td>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['user_email_address'] ?></td>
                            <td><?php echo $row['dob'] ?></td>
                            <td><?php echo $row['user_contact_no'] ?></td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
<?php
    } else {
        header("LOCATION: ./home.php");
    }
} else {
    header("LOCATION: ../admin_login.php");
}
require("footer.php"); ?>