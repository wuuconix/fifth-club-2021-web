<?php
if(isset($_GET['ip']))
{
    $ip = $_GET['ip'];
    if(preg_match("/ /", $ip))
        die("no space!");
    if(preg_match("/index/", $ip))
        die("i will not show it to you!");
    else if(preg_match("/bash/", $ip))
        die("no bash!");
    else if(preg_match("/cat/i", $ip))
        die("no cat");
    else if(preg_match("/flag/i", $ip))
    {
        $ip = preg_replace("/flag/","",$ip);
        echo("found flag! it has been replaced to " . $ip . "<br>");
    }
    $a = shell_exec("ping -c 4 ".$ip);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
else
    echo "/?ip";
?>