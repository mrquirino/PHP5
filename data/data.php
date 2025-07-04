<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exemplos de Data e Hora</title>
<style type="text/css">
    body{
        font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
        font-size: 16px;
    }
</style>
</head>

<body>

<?php
    // Configurando o Timezone
    echo "Timezone configurado: " . date_default_timezone_get();
    echo "<br>";
    echo "A hora atual do servidor é " . date("h:i:s");

    echo "<br>";
    echo "<br>";

    // Configurando um novo Timezone
    date_default_timezone_set("Europe/Madrid");
    echo "Novo Timezone foi ajustado: " . date_default_timezone_get();
    echo "<br>";
    echo "A hora atual é agora: " . date("h:i:s");
?>

</body>
</html>