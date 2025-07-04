<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modelo</title>
</head>

<body>

<?php 
    //Exemplo da função substr (cortar parte de uma string)
    $registro = "Cliente: Paulo Roberto RG: 28332123 CPF: 01001000192";
    echo substr( $registro,0,22);
    echo"<br>";
    echo"<br>";
    echo substr( $registro,23,12);
    echo "<br>";
    echo "<br>";
    echo substr( $registro,36,16);
    echo "<br>";
    echo "<br>";

    $cidade = "001 - Sorocaba | 002 - São Paulo";
    echo "O cliente mora em " . substr( $cidade,6,8) . " e se chama: " . substr($registro,8,14);

    echo"<br>";
    echo"<br>";

    // Exemplo da fnção str_replace (substitui trechos dentro de uma String)
    $frase = "O registro foi excluido com sucesso";
    echo str_replace("registro","arquivo com vírus", $frase );
    echo "<br>";
    echo "<br>";

    $frase = "Indique;um;amigo;para;assinar;nossa;revista";
    echo str_replace(";"," ", $frase );
    echo "<br>";
    echo "<br>";

    // Exemplo da função str_pad (preenche a String com um conjunto de caracteres a esquerda)
    $codigo = "Celular";
    echo str_pad($codigo, 20,"-", STR_PAD_LEFT);
    echo "<br>";
    echo "<br>";

    // Exemplo da função str_pad (preenche a String com um conjunto de caracteres a direita)
    $codigo = "Celular";
    echo str_pad($codigo, 20,"-", STR_PAD_RIGHT);
?>

</body>
</html>