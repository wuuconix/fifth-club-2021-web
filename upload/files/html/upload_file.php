<?php
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);     // 获取文件后缀名
    if (preg_match("/^\.\S*/i", $_FILES["file"]["name"]))
        echo "禁止上传 . 开头的文件!";
    else if (preg_match("/php/i", $extension))
        echo "非法的文件后缀:" . $extension;
    else if ($_FILES["file"]["size"] > 1024000)
        echo "上传文件太大!";
    else 
    {
        if ($_FILES["file"]["error"] > 0)
            echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        else
        {
            echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
            echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
            echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            if (file_exists("public/upload/" . $_FILES["file"]["name"])) // 判断 upload 文件夹中是否存在该文件
                echo $_FILES["file"]["name"] . " 文件已经存在。 ";
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], "public/upload/" . $_FILES["file"]["name"]);
                echo "文件存储在: " . "public/upload/" . $_FILES["file"]["name"];
            }
        }
    }
?>