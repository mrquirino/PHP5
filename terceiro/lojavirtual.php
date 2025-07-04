<?php
  $produto = "Câmera Nikon D3000";
  $quantidade = "3";
  $precounitario ="1200";
  $total = $quantidade * $precounitario;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comandos IF, Else e ElseIF</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000;
}
-->
</style></head>

<body bgcolor="#C4E1FF">
<h2>Loja Virtual 1.0 - Carrinho de compras</h2>
<table width="940" border="0" cellpadding="2" cellspacing="0" id="carrinho_compra">
  <tr>
    <td bgcolor="#FFFFFF"><strong>Produto</strong></td>
    <td width="120" align="center" bgcolor="#FFFFFF"><strong>Quantidade</strong></td>
    <td width="120" align="right" bgcolor="#FFFFFF"><strong>Preço unitário R$</strong></td>
    <td width="120" align="right" bgcolor="#FFFFFF"><strong>Total R$</strong></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $produto; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $quantidade; ?></td>
    <td align="right" bgcolor="#FFFFFF"><?php echo $precounitario; ?></td>
    <td align="right" bgcolor="#FFFFFF"><?php echo $total; ?></td>
  </tr>
</table>
<br />
<table width="940" border="0" cellpadding="2" cellspacing="0" id="frete">
  <tr>
    <td bgcolor="#FFFFCC"><strong>Cálculo do frete</strong></td>
    <td width="120" align="center" bgcolor="#FFFFCC"><strong>PAC</strong></td>
    <td width="120" align="center" bgcolor="#FFFFCC"><strong>Sedex</strong></td>
    <td width="120" align="center" bgcolor="#FFFFCC"><strong>Transportadora</strong></td>
  </tr>

  <?php
    // definindo o valor da variavel regiao
    $regiao = "RJ";

    if ($regiao == "RS") {
      $frete_pac = "R$ 14,10";
      $frete_sedex = "R$ 39,20";
      $frete_transportadora = "R$ 18,50";
    } elseif ($regiao == "PR") {
      $frete_pac = "R$ 16,10";
      $frete_sedex = "R$ 43,40";
      $frete_transportadora = "R$ 23,50";
    } elseif ($regiao == "SC") {
      $frete_pac = "R$ 15,00";
      $frete_sedex = "R$ 41,79";
      $frete_transportadora = "R$ 21,00";
    } else {
      $frete_pac = "R$ 00,00";
      $frete_sedex = "R$ 00,00";
      $frete_transportadora = "R$ 00,00";
    }

  ?>

  <tr>
    <td bgcolor="#FFFFCC">Região informada: <strong><?php echo $regiao; ?></strong></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $frete_pac; ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $frete_sedex; ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $frete_transportadora; ?></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#FFFFCC">Selecione o seu frete aqui &gt;&gt;</td>
    <td align="center" bgcolor="#FFFFCC"><input name="radio" type="radio" id="optFrete" value="optFrete" checked="checked" />
    <label for="optFrete"></label></td>
    <td align="center" bgcolor="#FFFFCC"><input type="radio" name="radio" id="optFrete2" value="optFrete" /></td>
    <td align="center" bgcolor="#FFFFCC"><input type="radio" name="radio" id="optFrete3" value="optFrete" /></td>
  </tr>
</table>
</body>
</html>