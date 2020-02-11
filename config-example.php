<!-- Rename this file to "config.php" and put the real credentials below  -->

<?php
$dsn = "mysql:dbname=database;host=localhost";
$dbuser = "";
$dbpass = "";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  // echo "conectado";

} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

 ?>
