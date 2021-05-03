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
        $n1 = isset($_GET ["n1"])?$_GET ["n1"]:"nota vazia";
        $n2 = isset($_GET ["n2"])?$_GET ["n2"]:"nota vazia";
        $m = ($n1 + $n2) / 2;
        echo "As notas do aluno(a) foram $n1 e $n2. Sua média é $m.<br>";
        if ($m < 5) {
            $sit = "reprovado";
        } else if ($m >= 5 && $m < 7) {
            $sit = "em recuperação";
        } else {
            $sit = "aprovado";
        }
        echo "Com essas notas o aluno está $sit.";

        
    ?>
    <a href="exercicio03.html">Voltar</a>
</div>    
</body>
</html>