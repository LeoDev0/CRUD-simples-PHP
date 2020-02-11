<?php
require_once "config.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = addslashes($_GET['id']);

  $sql = "SELECT * FROM usuarios WHERE id = $id";
  $sql = $pdo->query($sql);

  if ($sql->rowCount() > 0) {
    $user = $sql->fetch();

  } else {
    header("Location: index.php");
  }

} else {
  header("Location: index.php");
}


if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = $id";
  $sql = $pdo->prepare($sql);

  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":email", $email);
  $sql->execute();

  header("Location: index.php");
}

 ?>

<a href="index.php">Voltar</a>

<br><br>

 <form action="#" method="post">
   <label for="nome">Nome:</label><br>
   <input type="text" name="nome" value="<?= $user['nome'] ?>"><br><br>
   <label for="email">Email:</label><br>
   <input type="text" name="email" value="<?= $user['email'] ?>"><br><br>
   <button>Salvar alterações</button>
 </form>
