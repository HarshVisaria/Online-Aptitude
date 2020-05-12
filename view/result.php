<?php require('header.php');
if (isset($_GET['result'])) {
    echo "You have Submitted the exam";
} else {
    header("LOCATION: ./home.php");
}
?>
<div class="container">
    <p><h1>Your Score is : <span id="result"><?php echo $_GET['result']; ?></span></h1></p>
    <br>

    <div id="result-table">
    </div>
    <form method="POST" action="../controller/result_record.php">
        <input type="hidden" name="result" value="<?php echo $_GET['result']; ?>">
        <input type="hidden" name="user_name" vaLue="<?php echo $_SESSION['user_id']; ?>">
        <input type="hidden" name="timestamp" 
        value="<?php $timestamp = date('Y-m-d H:i:s');
        echo $timestamp;?>">
        <button class="btn btn-primary" id="mail_send">Send Certificate</button>
    </form>
</div>
<script src="../app-assets/js/result.js"></script>
<?php require('footer.php') ?>