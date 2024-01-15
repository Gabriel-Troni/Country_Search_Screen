<?php
function verifica_campo($conn, $texto)
{
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  $texto = mysqli_real_escape_string($conn, $texto);
  return $texto;
}

$pais = $capital = $campoOrdenacao = $ordem = $qtde = "";
$pais = verifica_campo($conn, $_POST["pais"]);
$capital = verifica_campo($conn, $_POST["capital"]);
$campoOrdenacao = verifica_campo($conn, $_POST["campoOrdenacao"]);
$ordem = verifica_campo($conn, $_POST["ordem"]);
$qtde = verifica_campo($conn, $_POST["qtde"]);
?>