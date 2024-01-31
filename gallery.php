<?php include('header.php'); ?>
        <article id="gallery">
        <p class="status"><strong>Live View Captures</strong></p>
            <?php
                $captures = array_diff(glob('captures/*.jpg'), ['.', '..']);
                if(count($captures) > 0){
                    foreach($captures as $img){
                        $name = str_replace("captures/", "", $img);
                        $name = str_replace(".jpg", "", $name);
                        echo '<article class="cap-box">
                        <a href="' . $img . '"><img src="' . $img . '"><span class="title">' . $name . '<span></a>
                        </article>';
                    }
                }
                else{
                    echo '<p class="status"><strong>No Captured Images.</strong></p>';
                }
            ?>
        </article>
<?php include('footer.php'); ?>