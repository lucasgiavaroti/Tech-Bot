<?php
require_once "../class/user.php";
require_once "../control/usuarioDAO.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setSenha($senha);

$dao = new UsuarioDAO();
$dao->cadastrar($usuario);

header("location:../include/perfil.php");
?>