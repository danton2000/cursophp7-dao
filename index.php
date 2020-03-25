<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);//mostra todos os usuarios

$root = new Usuario();
$root->loadById(3);//MOSTRA UM USUARIO ESPECIFICO
echo $root;

// $lista = Usuario::getList();//por que o metodo é estatico
// echo json_encode($lista);CARREGA UM LISTA DE USUARIOS

// $search = Usuario::search("D");
// echo json_encode($search);PROCURA O USUÁRIO PELO LOGIN

// $usuario = new Usuario();
// $usuario->login("Danton", "123");
// echo $usuario;

