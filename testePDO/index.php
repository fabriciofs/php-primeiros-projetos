<?php

require_once('./config.php');


$usuarios = $pdo->query('select * from usuarios order by id;')->fetchAll();
echo '<pre>';
print_r($usuarios);
echo '</pre>';

$lastId = $usuarios[count($usuarios) - 1]['id'];

$row = [
  "nome" => "Nome do usuario",
  'email' => "usuario@teste.com",
];
// $sql = "insert into usuarios values (':nome', ':email');";
$sql = "INSERT INTO usuarios (nome, email) vALUES (:nome, :email);";
$status = $pdo->prepare($sql)->execute($row);
if ($status) {
  $lastId = (int) $pdo->lastInsertId();
}

$query = $pdo->prepare("select * from usuarios where id = :id;");
$query->execute(['id' => $lastId]);
$usuario = $query->fetch();
echo '<pre>';
print_r($usuario);
echo '</pre>';
