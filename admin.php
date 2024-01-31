<?php
session_start();
error_reporting(0);
if(isset($_SESSION['loggedin'])){ ?>

    <?php include('header.php'); ?>
    <div id="admin">
        FLAG{CH4NG3_Y0UR_P455W0RD}
    </div>
    <?php include('footer.php'); ?>

<?php }
else{
    header('location: login.php');
}
?>