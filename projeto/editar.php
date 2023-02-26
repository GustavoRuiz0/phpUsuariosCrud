<?php
require 'config.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');


if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("location: index.php");
        exit();
    }
} else {
    header("location: index.php");
    exit();
}
?>

<body>
    <h1>EDITAR USUARIO</h1>
    <form action="editar_action.php" method="POST">

        <input type="hidden" name="id" value="<?=$info['id'];?>">

        <label for="nome">
            Nome:
            <input type="text" id="name" name="name" value="<?=$info['nome'];?>">
        </label>

        <label for="email">
            Email:
            <input type="email" id="email" name="email" value="<?=$info['email'];?>">
        </label>

        <input type="submit" value="Cadastrar">
    </form>

</body>
