<?php
  $db_ca        = $_ENV["PLANETSCALE_SSL_CERT_PATH"];
  $servername   = $_ENV["PLANETSCALE_DB_HOST"];
  $username     = $_ENV["PLANETSCALE_DB_USERNAME"];
  $db_password  = $_ENV["PLANETSCALE_DB_PASSWORD"];
  $dbname       = $_ENV["PLANETSCALE_DB"];

  $conn = mysqli_init();
  mysqli_ssl_set($conn, NULL, NULL, $db_ca, NULL, NULL);
  mysqli_real_connect($conn, $servername, $username, $db_password, $dbname, NULL, NULL, MYSQLI_CLIENT_SSL);
  if(!$conn){
    die("Erro na conexão: " . mysqli_connection_error());
  }
  $sql = "USE $dbname";
  if(!mysqli_query($conn, $sql)){
    die("Erro ao entrar na base de dados: " . mysqli_error($conn));
  }
?>

