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
        $a = isset( $_GET ["ano"])?$_GET ["ano"] :1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos.<br>";
        if ($i < 16){
            $tipovoto = "não vota";
        } else if (($i >= 16 && $i < 18) || ($i > 65)) {
            $tipovoto = "voto opcional";
        } else {
            $tipovoto = "voto obrigatório";
        }
        echo "Para essa idade, $tipovoto";
    ?>
</div>    
</body>
</html>