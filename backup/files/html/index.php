<?php echo "为了防止意外情况的发生，我把网站进行了备份。<br>";  ?>
<!-- 你试过Linux 里的 tar -zcvf 命令嘛，最近我正在学习它 -->
<?php 
    include_once("flag.php");
    if (!is_numeric($_GET['a']) && $_GET['a'] == 114514)
    {
        echo "Level 1 passed!<br>"; 
        if ((string)$_GET['b'] != (string)$_GET['c'] && md5($_GET['b']) == md5($_GET['c']))
        {
            echo "Level2 passed! keep on!<br>"; 
            if (@strcmp($_POST['flag'],$FLAG) == 0)
                echo($flag);
        }
    }
?>