<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modelo</title>
</head>

<body>

<?php 
    // Exemplo da função strlen (contar número de caracteres)
    $nome = "Maria Luiza Pereira Batista";
    echo "o nome $nome tem " . strlen($nome) . " letras";
    echo "<br>";
    echo "<br>";

    //Exemplo da função trim (retirar o espaço do início e do final)
    $mensagem = "       Oi, eu gostaria de comprar seus produtos!!       ";
    $mensagem = trim($mensagem);
    echo "<input type='text' size='60' value='$mensagem' />";
    echo "<br>";
    echo "<br>";

    // Exemplo da função strtoupper (Converte a string para MAIÙSCULA)
    $mensagem = "pessoal: fazer o backup diariamente";
    echo strtoupper($mensagem);
    echo "<br>";
    echo "<br>";

    // Exemplo da função strtolower (Converte a string para minúscula)
    $registro = "ERRO 1020: O PEDIDO DO CLIENTE EXTRAVIOU.";
    echo strtolower($registro);
    echo "<br>";
    echo "<br>";

    // Exemplo da função  ucwords (Converte a primeira letra de cada palavra maiúscula)
    $palavra = "o corno subiu na árvore mas não sabia voar.";
    echo ucwords ($palavra);
    echo "<br>";
    echo "<br>";

    // Exemplo da função lcfirst (Converte a primeira letra em minúsculo)
    $tipo = "CADA CORNO COM O SEU CHIFRE.";
    echo lcfirst($tipo);
    echo "<br>";
    echo "<br>";

    // Exemplo da função ucfirst(Converte a primeira letra em maiúsula)
    $coisa = "o poema do cume.";
    echo ucfirst($coisa);
    echo "<br>";
    echo "<br>";

?>

</body>
</html>