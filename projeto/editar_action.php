<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');

$name = filter_input(INPUT_POST, 'name');


$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if ($id and $name and $email) {
    //UPDATE usuarios SET

    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;

} else {
    header("Location: adicionar.php");
    exit;
}
?>