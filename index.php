<?php
require_once "config.php";
 ?>

<a href="adicionar.php">Adicionar novo usuário</a>

<br><br>

<table border="0" width="100%">
  <tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
  </tr>
  <?php
  $sql = "SELECT * FROM usuarios";
  $sql = $pdo->query($sql)->fetchAll();

  if (count($sql) > 0) {
    foreach ($sql as $usuario) {
      echo '<tr>';
      echo '<td>' . $usuario['nome'] . '</td>';
      echo '<td>' . $usuario['email'] . '</td>';
      echo '<td>  <a href="editar.php?id=' . $usuario['id'] . '">Editar</a> - <a href="deletar.php?id=' . $usuario['id'] . '">Excluir</a> </td>';
      echo '</tr>';
    }
  }

   ?>
</table>
