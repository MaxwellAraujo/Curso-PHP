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
        $num = $_GET ["p"];
        echo "O préço do produto é R$ " . number_format($num,2,",",".");
        $num -= ($num * 0.1);
        echo "<br/>O novo preço com 10% de aumento será R$ ". number_format($num,2,",",".");
    ?>
</div>    
</body>
</html>