<?php 
require('header.php');
 if (isset($_SESSION["user_id"])) {
     if($_SESSION["user_id"]=="admin"){

     
     ?>
    <div class="container mt-3">
        <h4 class="text-center">Set Time For Each Question</h4>
        <div class="row mt-2">
            <div class="col">
                <form action="../controller/time_set.php" method="post">
                    <div class="row">
                        <div class="col-md-1">
                            <label for="time" class="mt-1">
                                Set Time
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="time" id="name" class="form-control" placeholder="Enter Time in Seconds">
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn-primary btn">
                </form>
            </div>
        </div>
    </div>
<?php 
    require('footer.php');
    }
    else{
        header('LOCATION: ./home.php');

    }
} else {
    header('LOCATION: ../admin_login.php');
} ?>