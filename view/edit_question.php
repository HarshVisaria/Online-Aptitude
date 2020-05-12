<?php require("header.php");
$con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");
$id = $_GET['id'];
$query = "SELECT * FROM `question` WHERE  `q_id` = '$id'";
$data = mysqli_query($con, $query);
if (mysqli_num_rows($data)) {
    while ($main_row = mysqli_fetch_assoc($data)) {
?>
        <div class="container mt-3">
            <?php if (isset($_SESSION["user_email"])) {
                if ($_SESSION["user_email"] == "admin") {
            ?>
                    <h4>Edit Form</h4>
                    <div class="row">
                        <div class="col">
                            <form action="../controller/update_question.php" method="post">
                                <div class="row mt-2">
                                    <input type="hidden" name="question_id" id="" class="form-control" value="<?php echo $main_row['q_id'] ?>">
                                </div>
                                <div class="row mt-5">
                                    <div class="col-2">
                                        <label for="">Category</label>
                                    </div>
                                    <div class="col-6">
                                        <select name="category" id="" class="form_control">
                                            <?php
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
                                        <input type="text" name="question" id="" class="form-control" value="<?php echo $main_row['q_title'] ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label for="">Option A</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="option_a" id="" class="form-control" value="<?php echo $main_row['op_a'] ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label for="">Option B</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="option_b" id="" class="form-control" value="<?php echo $main_row['op_b'] ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label for="">Option C</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="option_c" id="" class="form-control" value="<?php echo $main_row['op_c'] ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label for="">Option D</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="option_d" id="" class="form-control" value="<?php echo $main_row['op_d'] ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label for="">Ans</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="ans" id="" class="form-control" value="<?php echo $main_row['ans_id'] ?>">
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </form>
                <?php   }
                else{
                    header("LOCATION: ./home.php");
                }
            }
        } ?>
                <p>
                    <?php
                    if (isset($_GET['insert'])) {
                        if ($_GET['insert'] == "success")
                            echo "Successfully Updated Data";
                        else
                            echo "Error While Updated Data";
                    }
                    ?></p>
                        </div>
                    </div>
        </div>
        <?php require("footer.php"); ?>
    <?php } else {
    header("LOCATION: ../admin_login.php");
}
    ?>