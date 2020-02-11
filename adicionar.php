<?php
require_once "config.php";

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome =  $_POST['nome'];
  $email =  $_POST['email'];
  $senha = md5($_POST['senha']);

  $sql = "INSERT INTO usuarios VALUES (null, :nome, :email, :senha)";
  $sql = $pdo->prepare($sql);

  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":senha", $senha);
  $sql->execute();

  header("Location: index.php");
}

 ?>

 <a href="index.php">Voltar</a>

 <br><br>

<form action="#" method="post">
  <label for="nome">Nome:</label><br>
  <input type="text" name="nome"><br><br>
  <label for="email">Email:</label><br>
  <input type="text" name="email"><br><br>
  <label for="senha">Senha:</label><br>
  <input type="password" name="senha"><br>
  <button>Adicionar usuário</button>
</form>
