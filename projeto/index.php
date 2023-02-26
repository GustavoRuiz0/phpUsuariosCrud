<?php
require "config.php";
require "dao/UsuarioDaoMysql.php";

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

$sql = $pdo->query('SELECT * FROM usuarios');
$lista = [];
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach ($lista as $usuario): ?>
        <tr>
            <td>
                <?=$usuario->getId();?>
            </td>

            <td>
                <?=$usuario->getNome();?>
            </td>

            <td>
                <?=$usuario->getEmail();?>
            </td>

            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">Editar</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
