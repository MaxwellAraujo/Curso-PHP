<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET ["num"])?$_GET ["num"]:0;
        $o = isset($_GET ["oper"])?$_GET ["oper"]:1;
        switch ($o) {
            case 1:
                $r = $n * 2;
            case 2:
                $r = $n ^ 3;
            case 3:
                $r = sqrt($n)
        }
    ?>
</div>    
</body>
</html>