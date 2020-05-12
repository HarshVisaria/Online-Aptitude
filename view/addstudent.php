<?php require("header.php");
if (isset($_SESSION["user_id"])) {
    if ($_SESSION["user_id"] == "admin") {
?>
        <div class="container mt-3">
            <h4>Add Student</h4>
            <div class="row">
                <div class="col">
                    <form action="../controller/add_student.php" method="post">
                        <div class="row mt-5 ">
                            <div class="col-2">
                                <label for="">Registration #</label>
                            </div>
                            <div class="col-4">
                                <input type="text" name="reg_no" class="form-control" placeholder="Enter Registration No">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <label for="">DOB</label>
                            </div>
                            <div class="col-4">
                                <input type="date" name="dob" class="form-control">
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                    <p>
                        <?php
                        if (isset($_GET['insert'])) {
                            if ($_GET['insert'] == "successful")
                                echo "Successfully Inserted Data";
                            else
                                echo "Error While Inserting Data";
                        }
                        else if(isset($_GET['existed'])){
                            echo "Existed Registration No";
                        }
                        ?></p>
                </div>
            </div>
        </div>
        <?php require("footer.php");
        ?>
<?php
    }
} else {
    header("LOCATION: ../admin_login.php");
}
?>