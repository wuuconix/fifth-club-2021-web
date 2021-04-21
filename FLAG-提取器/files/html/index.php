<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="static/main.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
        <title>FLAG 提取器</title>
    </head>
    <body class="text-center">
        <form class="form-getflag">
            <div id="app">
                <h1>FLAG 提取器</h1>
                
                <div class="alert alert-secondary" role="alert">
                    <?php
                        if (isset($_GET['number'])) {
                            $number = floatval($_GET['number']);
                            if ($number - (int)$number < 10e-5)
                                for ($i=0; $i < (int)$number; $i++)
                                    echo "flag{He7e_1s_your_Fl4g}" . "<br>";
                            else
                                echo "我可以给你 1 个 flag、2 个 flag、3 个 flag…… 但我没法给你 " . $number . " 个flag。";
                        }
                        else 
                            echo '';
                    ?>
                </div>
                
                <p>你想提取的 flag 数量：<span id="show"></span></p>
                <input type="range" id="number" name="number" class="form-control" value="0" min="0" max="1.5" step="0.00001"/>
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="提取" />
            </div>
        </form>
        <script src="static/jquery.min.js"></script>
        <script src="static/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            var prevVal = 0;
            $(document).ready(function() {
                $("#show").text($('#number')[0].value);
                $('#number').on('input', function() {
                    if ($('#number')[0].value.toString() === "1") {
                        console.log('没想到吧!');
                        $('#number')[0].value = 1.00001;
                        if (prevVal == 1.00001)  $('#number')[0].value = 0.99999;
                        if (prevVal == 0.99999)  $('#number')[0].value = 1.00001;
                    }
                    $("#show").text($('#number')[0].value.toString());
                    prevVal = $('#number')[0].value;
            });
        });
        </script>
    </body>
</html>