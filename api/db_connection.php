<?php 
  $servername   = $_ENV["PLANETSCALE_DB_HOST"]
  $username     = $_ENV["PLANETSCALE_DB_USERNAME"]
  $db_password  = $_ENV["PLANETSCALE_DB_PASSWORD"]
  $dbname       = $_ENV["PLANETSCALE_DB"]

  $conn = mysqli_connect($servername, $username, $db_password);
  if(!$conn){
    die("Erro na conexão: " . mysqli_connection_error());
  }

  $sql = "USE $dbname";
  if(!mysqli_query($conn, $sql)){
    die("Erro ao entrar na base de dados: " . mysqli_error($conn));
  }
?>

