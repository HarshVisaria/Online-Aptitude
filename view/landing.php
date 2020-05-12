<?php require("./header.php");
if (isset($_SESSION['user_id'])) {
?>
    <div class="container p-5 mt-5 pl-4" style="background:#ffb7b2">
        <div class="row">
            <div class="col-6">
                <h4 class="text-danger mt-4">Instructions</h4>
                <ol>
                    <li>This is Online Aptitue Test Portal</li>
                    <li>There are <b>3 Section</b> </li>
                    <li>Each Section has <b> 10 Question</b></li>
                    <li>After Completing Exam Press <b>Finish Exam</b> Button</li>
                    <li>Please fill out following details <sub><b>(Please ignore if you already filled)</b></sub></li>
                    <li>Press <b> Next</b> Button</li>
                </ol>
                <button class="btn btn-primary ml-4" onclick="skip()">Next</button>
            </div>
            <div class="col-6">
                <h4 class="text-center">Please Fill out this </h4>
                <form action="../controller/update_user_info.php" method="post">
                    <input type="hidden" name="reg_no" value="<?php echo $_SESSION['user_id'] ?>">
                    <div class="row mt-4">
                        <div class="col-4 d-flex justify-content-end">
                            <label for="">Name</label>
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <input type="text" placeholder="Enter Your Name" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4 d-flex justify-content-end">
                            <label for="">Email</label>
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <input type="text" placeholder="Enter Your Email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4 d-flex justify-content-end">
                            <label for="">Contact #</label>
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <input type="tel" placeholder="Enter Your Contact" class="form-control" name="contact">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col d-flex justify-content-end">
                            <input type="submit" value="Update" class="btn btn-primary align-item-center d-flex">
                        </div>
                    </div>
                    <?php if(isset($_GET['update']) || isset($_GET['exist'])){
                        if($_GET['update']=="false"){
                            echo "Update failed";
                        } else if ($_GET['exist'] == "true") {
                            echo "Email ID is already registred";
                        }
                    } ?>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">

    </div>
<?php } else {
    header("LOCATION: ./home.php");
} ?>
<script>
    function skip() {
        window.location.href = "./home.php";
    }
</script>