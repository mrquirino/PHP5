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
    // Data atual
    $dataatual = date("d/m/Y");
    echo $dataatual;
    echo "<br>";
    echo "<br>";

    // Hora atual sem segundos
    $horaatual = date("H:i");
    echo $horaatual;

?>

</body>
</html>