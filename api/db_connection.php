<?php 
  $servername = "200.236.3.126";
  $username = "root";
  $db_password = "example";
  $dbname = "world";

  $conn = mysqli_connect($servername, $username, $db_password);
  if(!$conn){
    die("Erro na conexão: " . mysqli_connection_error());
  }

  $sql = "USE $dbname";
  if(!mysqli_query($conn, $sql)){
    die("Erro ao entrar na base de dados: " . mysqli_error($conn));
  }
?>

