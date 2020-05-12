<ul class="nav nav-tabs mt-5 pt-5 pl-5 pr-5" id="myTab" role="tablist">
    <?php $category = "SELECT * FROM `category`";
    $category_data = mysqli_query($con, $category);
    if (mysqli_num_rows($category_data) > 0) {
        while ($row = mysqli_fetch_assoc($category_data)) { ?>
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo $row['c_name'] ?></a>
            </li>
    <?php
        }
    } ?>
</ul>
<?php $tab_content_query = "SELECT * FROM `category` " ?>
<div class="tab-content p-5" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="<?php echo $row['c_name'] . 'tab' ?>">
        <div class='d-flex'>
            <?php
            $java = "SELECT * FROM `question` WHERE `c_id`='1'";
            $data = mysqli_query($con, $java);
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    echo "<a href='?q_id=" . $row['q_id'] . "'><div class='mt-1' style='width:25px;height:25px;margin-right:10px;background:#c5c5c5;border:1px solid black'></div></a>";
                }
                //Display Code
                /*while ($row = mysqli_fetch_assoc($data)) {
                echo "<label> " . $row["q_title"] . "</label> " . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_a"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_b"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_c"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_d"] . "<br>";
            }*/
            }
            ?>
        </div>
        <div class="p-1 mt-5">
            <?php
            if (isset($_GET["q_id"])) {
                $id = $_GET["q_id"];
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
            <button class="btn bg-primary text-white" onclick="saveAns()" id="save_ans">Save and Back</button>
            <a class="btn bg-primary text-white" href="../view/home.php">Back</a>
        </div>

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <?php
        $php = "SELECT * FROM `question` WHERE `c_id`='2'";
        $data = mysqli_query($con, $php);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<label> " . $row["q_title"] . "</label> " . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_a"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_b"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_c"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_d"] . "<br>";
            }
        }
        ?>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <?php
        $python = "SELECT * FROM `question` WHERE `c_id`='3'";
        $data = mysqli_query($con, $python);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<label> " . $row["q_title"] . "</label> " . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_a"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_b"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_c"] . "<br>" .
                    "<input type='radio' name=" . $row['q_id'] . "> " . $row["op_d"] . "<br>";
            }
        }
        ?>
    </div>
</div>
<!-- //dynamic tabs -->
<?php require('./header.php') ?>
<?php $con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan"); ?>

<?php
$tab_query = "SELECT * FROM `category`";
$tab_result = mysqli_query($con, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while ($row = mysqli_fetch_assoc($tab_result)) {
    $tab_menu .= '<li class="active nav-item"><a class="nav-link" href="#' . $row["c_id"] . '" data-toggle="tab">' . $row["c_name"] . '</a></li>';
    $tab_content .= '<div id="' . $row["c_id"] . '" class="tab-pane fade in active">';
    $tab_content_query = "SELECT * FROM `question` WHERE c_id = '" . $row["c_id"] . "'";
    $tab_query_result = mysqli_query($con, $tab_content_query);
    if (mysqli_num_rows($tab_query_result)>0) 
    {
        while ($sub_row = mysqli_fetch_array($tab_query_result)); {
            print_r($sub_row);
            $div = "<a href='?q_id=" . $sub_row['q_id'] . "'><div class='mt-1' style='width:25px;height:25px;margin-right:10px;background:#c5c5c5;></div></a>";
            $tab_content = $div;
        }
    }
    $i++;
}
?>

<div class="container">
    <ul class="nav nav-tabs mt-5 pt-5 pl-5 pr-5">
        <?php
        echo $tab_menu;
        ?>
    </ul>
    <div class="tab-content">
        <br />
        <?php
        echo $tab_content;
        ?>
    </div>
</div>
<?php require('./footer.php') ?>
<script>
    $('#save_ans').click(function() {
        var isChecked = $("input[name='<?php echo $row['q_id'] ?>']:checked")
        if (isChecked) {
            alert(1);
        }
    })
</script>