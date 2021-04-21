<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>check</title>
</head>
<div style="position: absolute;bottom: 0;width: 99%; text-align: center" ><p align="center" style="font:italic 15px Georgia,serif;color:white;">conix</p></div>
    <body background='./image/bg.png' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
      <br><br><br>
      <?php 
        require_once "config.php";

        if (!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])) {
            $username = $_REQUEST["username"];
            $password = $_REQUEST["password"];
            $sql = "select * from `users` where `username`='{$username}' and `password`='{$password}'";
            $result = $db->query($sql);

            if (!$result) { //判断有无报错
              echo "<p style='font-family:verdana;color:white;text-align:center;'>" . mysqli_error($db) . "/p>";
              exit;
            }
            if (isset($result) && $result->fetch_row() != NULL) {
              echo "<h1 style='font-family:verdana;color:red;text-align:center;'>Login Success!</h1><br><br><br>";
              echo "<p style='font-family:arial;color:#ffffff;font-size:30px;text-align:center;'>You login my account! Fortunately, I have a plan B";
              echo "
                <center>
                <form method='POST'>
                    <p>如果你真的是本人，你一定知道我的生日</p>
                    <select name='year'>
                        <option>2002</option>
                        <option>2001</option>
                        <option>2000</option>
                        <option>1999</option>
                        <option>1998</option>
                        <option>1997</option>
                        <option>1996</option>
                        <option>1995</option>
                    </select>年
                    <select name='month'>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>月
                    <select name='day'>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>日
                    <br/>
                    <br/>
                    <button type='submit'>确定</button>
                    <input type='reset' value='重新选择'>
                </form>
                </center>
                ";
                if (isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day']) && $_POST['year'] == '1998' && $_POST['month'] == '2' && $_POST['day'] == '31')
                    echo "<p style='font-family:arial;color:#ffffff;font-size:30px;text-align:center;'>flag{W0w_U_kn0W_sql_1njecti0n&Burp}"; 
            } else {
              echo "<h1 style='font-family:verdana;color:red;text-align:center;font-size:70px;'>NO,Wrong username password！！！</h1>";
            }
        }
        else {
          echo "<h1 style='font-family:verdana;color:red;text-align:center;font-size:40px;'>Input your username and password</h1>";
        }
      ?>
    <form method="POST">
	
	
    </body>
</html>