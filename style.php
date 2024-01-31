<?php header("Content-type: text/css"); ?>
<?php include('config.php'); ?>
*{
    margin:0;
    padding:0;
    font-family:arial;
}
body{
    <?php 
    if(isset($style_background_pattern)) {
        echo "background: $style_background_pattern;";
        echo "background-color: $style_background_pattern_colour;";
        echo "background-size: $style_background_pattern_size;";
    }
    else {
        echo "background: #282828;";
    }
    ?>
    background-color: <?php echo $style_background_colour; ?>
}
#outer-wrap{
    width:800px;
    height:auto;
    margin:auto;
    position:relative;
    background:white;
}

/* Top Section ---------------------  */
#top{
    width:100%;
    float:left;
    background:<?php echo $style_body_background_colour; ?>;
    color:<?php echo $style_text_colour; ?>;
    position:relative;
}
#top h1{
    padding:5px;
    margin-top:25px;
}
#top h5{
    padding:5px;
}

/* Controls Section ----------------  */
nav{
    float:left;
    width:100%;
    background:<?php echo $style_body_background_colour; ?>;
    border-top:solid 1px blue;
    padding-top:10px;
}
nav ul{
    width:100%;
    float:left;
    height:30px;
}
nav li{
    display:inline-block;
    list-style-type:none;
    height:20px;
    width:90px;
    font-size:12px; 
    text-align:center;
    font-weight:bold;
    padding:2px;
    box-sizing:border-box;
    border-radius:2px;
}
nav li:hover{
    border:solid 1px white;
}
nav li a{
    position:relative;
    display:block;
    width:100%;
    height:100%;
    color:<?php echo $style_text_colour; ?>;
    text-decoration:none;
}
/* Controls Section ----------------  */
#controls{
    width:100%;
    float:left;

}
#controls select{
    margin:5px;
}
/* Camera View ---------------------  */
#cam-box{
    float:left;
    width:100%;
    height:480px;
    background:<?php echo $style_cam_border_colour; ?>;
    position:relative;
    border:solid 1px black;
    border-radius:5px;
    pointer-events: none;
}
#cam-box .cam-frame{
    position:relative;
    width:790px;
    height:470px;
    margin:5px;
    display:block;
    pointer-events: none;
}

/* Gallery -------------------------  */
#gallery{
    min-height:250px;
    width:100%;
    float:left;
    background:<?php echo $style_body_background_colour; ?>;
    color:<?php echo $style_text_colour; ?>;
    border-radius:5px;
}
#gallery .status{
    padding:10px;
}
.cap-box{
    width:200px;
    height:119px;
    float:left;
    position:relative;
    margin:15px 33px 0;
}
.cap-box a{
    display:block;
    width:200px;
    height:119px;
    box-sizing:border-box;
}
.cap-box a:hover{
    border:solid 1px <?php echo $style_gallery_capture_hover_border_colour; ?>;
    box-sizing:border-box;
}
.cap-box a span{
    display:inline-block;
    font-size:12px;
    background:<?php echo $style_gallery_capture_title_background_colour; ?>;
    color:<?php echo $style_gallery_capture_title_text_colour; ?>;
    position:absolute;
    left:0;
    top:0;
    width:100%;
    word-break:break-all;
}
.cap-box img{
    margin:5px;
    width:190px;
    height:109px;
}
/* Admin Login ---------------------  */
#login{
    width:100%;
    float:left;
    background:<?php echo $style_body_background_colour; ?>;
    border:solid 1px black;
    border-radius:5px;
    color:<?php echo $style_text_colour; ?>;
}
#login p{
    padding:5px;
    font-weight:bold;
}
#login input, #login label{
    padding:5px;
}
/* Admin ---------------------------  */
#admin {
    width:100%;
    float:left;
    background:<?php echo $style_body_background_colour; ?>;
    border:solid 1px black;
    border-radius:5px;
    color:<?php echo $style_text_colour; ?>;
}

/* Footer --------------------------  */
footer{
    width:100%;
    background:<?php echo $style_body_background_colour; ?>;
}
footer li{
    color:<?php echo $style_text_colour; ?>;
    font-size:12px;
    padding:2px;
    display:inline-block;
    list-style-type:none;
}
footer li a{
    color:<?php echo $style_text_colour; ?>;
}
