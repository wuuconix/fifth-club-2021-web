<!DOCTYPE html>
<html lang="zh">

<style>
.button {
    background-color: #5DADE2; /* Green */
    border: none;
    color: white;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius: 8px;
}

.button:hover {
    background-color: #555555;
    color: white;
}
</style>

<head>
<meta charset="UTF-8">
<title>upload</title>
</head>

<body background="./public/image/bg.jpg" style="background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;">

	<form action="upload_file.php" method="post" enctype="multipart/form-data">
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    	<div align="center">
    		<input type="file" name="file" id="file" style="color:white">
   			<input type="submit" name="submit" value="提交" class="button">
   		</div>
	</form>

	<div style="position: absolute;bottom: 0;width: 95%;"><p align="center" style="font:italic 15px Georgia,serif;"> conix</p></div>
</body>
</html>