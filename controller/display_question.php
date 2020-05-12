<?php require('../view/header.php') ?>
<div class="p-1 mt-5">
    <?php
    if (isset($_GET["q_id"])) {
        $id = $_GET["q_id"];
        $con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");
        $java = "SELECT * FROM `question` WHERE `q_id`='$id'";
        $data = mysqli_query($con, $java);
        if (mysqli_num_rows($data) > 0) {
            //Display Code
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<label> " . $row["q_title"] . "</label> " . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_a"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_b"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_c"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_d"] . "<br>";
            }
        }
    }
    ?>
</div>
<button class="btn bg-primary text-white" onclick="saveAns()" id="save_ans">Save and Back</button>
<a class="btn bg-primary text-white" href="../view/home.php">Back</a>

<?php require('../view/footer.php') ?>
<script>
    $('#save_ans').click(function() {
        var isChecked = $("input[name='<?php echo $row['q_id'] ?>']:checked")
        if (isChecked) {
            alert(1);
        }
    })
</script>