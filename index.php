<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);//mostra todos os usuarios

// $root = new Usuario();
// $root->loadById(3);//MOSTRA UM USUARIO ESPECIFICO
// echo $root;

// $lista = Usuario::getList();//por que o metodo é estatico não precisa instanciar o objeto(como não tinha o $this no metodo getList usamos o método estatico)
// echo json_encode($lista);//CARREGA UM LISTA DE USUARIOS

// $search = Usuario::search("Danton");//por que o metodo é estatico não precisa instanciar o objeto(como não tinha o $this no metodo search usamos o método estatico)NÃO USAR O ESTÁTICO QUANDO A MÉTODO ESTIVER AMARRADA NA CLASSE. 
// echo json_encode($search);//PROCURA O USUÁRIO PELO LOGIN

// $usuario = new Usuario();//carrega um usuário usando o login e a senha
// $usuario->login("Danton", "123");
// echo $usuario;

// $aluno = new Usuario("aluno-danton", "aluno123");
// $aluno->insert();
// echo $aluno;//INSERE UM USUÁRIO NO BANCO

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("professor", "321");

echo $usuario;

