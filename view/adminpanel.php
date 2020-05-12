<?php require("header.php");
if (isset($_SESSION["user_id"])) {
    if ($_SESSION["user_id"] == "admin") {
?>
        <div class="container mt-3">
            <h4>Admin Panel</h4>
            <div class="row">
                <div class="col">
                    <form action="../controller/admin_panel.php" method="post">
                        <div class="row mt-5">
                            <div class="col-2">
                                <label for="">Category</label>
                            </div>
                            <div class="col-6">
                                <select name="category" id="" class="form_control">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");
                                    $sql = "SELECT * FROM `category`";
                                    $data = mysqli_query($con, $sql);
                                    if (mysqli_num_rows($data) >= 1) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            echo "<option value =" . $row['c_id'] . ">" . $row['c_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <label for="">Question</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="question" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <label for="">Option A</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="option_a" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <label for="option_b">Option B</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="option_b" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <label for="">Option C</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="option_c" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <label for="">Option D</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="option_d" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <label for="">Ans ID</label>
                            </div>
                            <div class="col-6">
                                <input type="text" name="ans" id="" class="form-control">
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                    <p>
                        <?php
                        if (isset($_GET['insert'])) {
                            if ($_GET['insert'] == "success")
                                echo "Successfully Inserted Data";
                            else
                                echo "Error While Inserting Data";
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