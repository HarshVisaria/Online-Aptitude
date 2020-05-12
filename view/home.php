<?php require("header.php");
if (isset($_SESSION["user_id"])) {
    if($_SESSION["user_id"]== 'admin')
    {
        header("LOCATION: ./adminpanel.php");
    }
?>

    <div class="container mt-5" style="border:1px solid #c5c5c5">
        <style>
            .div {
                background-color: #419D78;
                color: #EFD0CA;
                font-size: 20px;
                text-align: center;
            }
        </style>
        <div id='countdown' class="mt-1" style="margin-left:58%;"></div>
        <?php
        require('../controller/db.con.php');
        $sql = "SELECT * FROM `set_time`";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <input type="hidden" name="time" id="time" class="form-control" value="<?php echo $row['time_in_sec'] ?>">
        <?php }
        }
        ?>
        <ul class="nav nav-tabs mt-2 pt-5 pl-5 pr-5">
            <li class="nav-item active"><a data-toggle="tab" href="#home" class="nav-link">Java</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#menu1" class="nav-link">PHP</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#menu2" class="nav-link">Python</a></li>

            <button style="margin-left:550px" class="btn btn-primary" onclick="printResult()">Finish The Exam</button>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="d-flex m-5">
                    <?php
                    $i = 0;
                    $java_q_index = 0;
                    $q_index = 0;
                    while ($i < 10) {
                        echo "<a onclick=" . "showQues('0','java','$java_q_index','$q_index','java_question_div','java_question_title','label1','label2','label3','label4','java_op_a','java_op_b','java_op_c','java_op_d')" . " ><div class='mt-1' id='$q_index' style='width:25px;height:25px;margin-right:10px;background:#c5c5c5;border:1px solid black'></div></a>";
                        $i++;
                        $java_q_index++;
                        $q_index++;
                    }
                    ?>

                </div>
                <div id="java_question_div" style="display:none" class="m-5">
                    <p id="java_question_title"></p>
                    <input type="radio" name="java" id="java_op_a">
                    <label for="java_op_a" id="label1"></label><br>
                    <input type="radio" name="java" id="java_op_b">
                    <label for="java_op_b" id="label2"></label><br>
                    <input type="radio" name="java" id="java_op_c">
                    <label for="java_op_c" id="label3"></label><br>
                    <input type="radio" name="java" id="java_op_d">
                    <label for="java_op_d" id="label4"></label><br>

                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div class="d-flex m-5">
                    <?php
                    $i = 0;
                    $php_q_index = 0;
                    $php_q = 10;
                    while ($i < 10) {
                        echo "<a onclick=" . "showQues('1','php','$php_q_index','$php_q','php_question_div','php_question_title','label5','label6','label7','label8','php_op_a','php_op_b','php_oc_c','php_oc_d')" . "><div  id='$php_q' class='mt-1' style='width:25px;height:25px;margin-right:10px;background:#c5c5c5;border:1px solid black'></div></a>";
                        $i++;
                        $php_q_index++;
                        $php_q++;
                    }
                    ?>
                </div>
                <div id="php_question_div" style="display:none" class="m-5">
                    <p id="php_question_title"></p>
                    <input type="radio" name="php" id="php_op_a">
                    <label for="php_op_a" id="label5"></label><br>
                    <input type="radio" name="php" id="php_op_b">
                    <label for="php_op_b" id="label6"></label><br>
                    <input type="radio" name="php" id="php_oc_c">
                    <label for="php_oc_c" id="label7"></label><br>
                    <input type="radio" name="php" id="php_oc_d">
                    <label for="php_oc_d" id="label8"></label><br>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="d-flex m-5">
                    <?php
                    $i = 0;
                    $python_q_index = 0;
                    $python_q = 20;
                    while ($i < 10) {
                        echo "<a onclick=" . "showQues('2','python','$python_q_index','$python_q','python_question_div','python_question_title','label9','label10','label11','label12','python_op_a','python_op_b','python_op_c','python_op_d')" . " ><div id='$python_q' class='mt-1' style='width:25px;height:25px;margin-right:10px;background:#c5c5c5;border:1px solid black'></div></a>";
                        $i++;
                        $python_q_index++;
                        $python_q++;
                    }
                    ?>
                </div>
                <div id="python_question_div" style="display:none" class="m-5">
                    <p id="python_question_title"></p>
                    <input type="radio" name="python" id="python_op_a">
                    <label for="python_op_a" id="label9"></label><br>
                    <input type="radio" name="python" id="python_op_b">
                    <label for="python_op_b" id="label10"></label><br>
                    <input type="radio" name="python" id="python_op_c">
                    <label for="python_op_c" id="label11"></label><br>
                    <input type="radio" name="python" id="python_op_d">
                    <label for="python_op_d" id="label12"></label><br>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    header("LOCATION: ../index.php");
}
?>
<script src="../app-assets/js/home.js"></script>
<?php require("footer.php") ?>