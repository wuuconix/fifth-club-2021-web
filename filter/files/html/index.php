<?php
    error_reporting(0);
    if (!$_GET['file'])
        echo '?file=demo.php<br>';
    else
    {
        $file = $_GET['file'];
        if (strstr($file, "../") || stristr($file, "tp") || stristr($file, "input") || stristr($file,"data"))
            exit("Oh god, please no!");
        else if (preg_match("/config/i", $file))
            exit("i will not show it to you!");
        include($file);
    }
    //play.php
?>