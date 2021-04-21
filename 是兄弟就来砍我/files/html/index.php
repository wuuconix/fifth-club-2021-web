<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>是兄弟就来砍👴</title>
<style type="text/css">
.underline{
	border-bottom: 1px solid #000;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;}
</style>
<script>
var hp = 100;
var base = 100;
function chop()
{
    var power = window.atob(document.getElementById("89e78ee56a81f026").value);
    var number = document.getElementById('num').value;
    if (number < 0)
    {
        document.getElementById("reflection").innerHTML = "是兄弟就真🔫实🤺得来砍我，砍" + number + "🔪算什🐴回事？";
        return;
    }
    hp -= (power * number);
    if (hp <= 0)
    {
        base += 1;
        hp = base;
        document.getElementById("reflection").innerHTML = "你砍死了👴 但是👴又复活了 还变💪了";
    }
    else
        document.getElementById("reflection").innerHTML = "你砍了👴" + number + "🔪，扣了👴" + power*number + "滴💔";
    document.getElementById("hp").innerHTML = hp;
    document.getElementById("db94c2b5d51beed1").value = window.btoa(hp);
}
</script>
</head>
<body>
<h1>是兄弟就来砍👴</h1>
<h3 style="color:red">把👴砍到72000滴💔，👴就给你⛳</h3>
<hr/>
<div>
    <p><img src="是兄弟就来砍我.png" style="float:left" width="480" /></p>
    <label>💔</label>
    <p id="hp">1000</p>
</div>
<hr/>
<label for="num">你要砍👴几🔪呢？</label>
<input name="num" id="num" maxlength=1 class="underline" />
<button onclick="chop()" disabled="true">🔪</button>
<br/>
<form method="POST">
    <div>
        <input name="89e78ee56a81f026" id="89e78ee56a81f026" type="hidden" value="MQ=="/>
        <input name="db94c2b5d51beed1" id="db94c2b5d51beed1" type="hidden"/>
    </div><br/>
    <button type="submit">领取flag</button>
</form>
<p id="reflection">
<?php
    if(isset($_POST['db94c2b5d51beed1']))
    {
        $hp = base64_decode($_POST['db94c2b5d51beed1']);
        if ($hp > 72000)
            echo "flag{y@4_4re_my_6rother!}";
        else 
            echo "还没把👴砍到72000💔，就🐘要⛳❓";
    }
    else
        echo "";
?>
</p>
</body>
</html>	