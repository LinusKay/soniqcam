<?php include('header.php'); ?>
<?php 
// SET NUMBER OF AVAILABLE CAMERAS
// If stream image not provided in stream/camera<number>.jpg, "Offline" placeholder will be set
$cams = 1;

// Currently selected camera
$stream = 1;
if($stream > $cams) {
    $stream = $cams;
}
if(isset($_GET['stream'])) {
    if($_GET['stream'] > $cams) {
        $stream = 1;
    }
    else {
        $stream = $_GET['stream'];
    } 
}
$stream_image = "stream/camera_" . $stream . "_latest.jpg";
if(!file_exists($stream_image)) {
    $stream_image = "media/offline.jpg";
}
?>
        <section id="controls">
            <form>
                <select name="stream" onchange="this.form.submit()">
                    <?php 
                        for($cam=1; $cam <= $cams; $cam++) {
                            if($stream == $cam) {
                                echo "<option selected value=" . $cam . ">Source " . $cam . "</option>";
                            }
                            else {
                                echo "<option value=" . $cam . ">Source " . $cam . "</option>";
                            }
                        }
                    ?>
                </select>
            </form>
        </section>
        <article id="cam-box">
            <img class="cam-frame" src=<?php echo $stream_image;?>>
        </article>
<?php include('footer.php'); ?>