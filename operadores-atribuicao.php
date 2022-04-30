<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ".number_format($preco, 2);
        $preco += ($preco * 10/100);
        echo "<br>O preço com 10% de aumento será R$ ".number_format($preco, 2);
        // Pega o ano pela URL
        $atual = $_GET["aa"];
        $anterior = --$atual;
        echo "<br>O ano anterior foi $anterior";
        $a = 3;
        $b = &$a;
        echo "<br>A variável A vale $a e a variável B vale $b";
        $x = "abc";
        $$x = "def";
        echo "<br>O conteúdo da variável X é $x e o conteúdo da variável da variável é $abc"

        ?>
    </div>
    
</body>
</html>
