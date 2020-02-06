<?php

require_once("config.php");

$sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);//mostra todos os usuarios

$root = new Usuario();

$root->loadById(5);

echo $root;
