<?php
require_once "../control/usuarioDAO.php";
session_start();

$dao = new UsuarioDAO();

$email = $_POST['email'];
$senha = $_POST['senha'];

$dados = $dao->login($email, $senha);

if (is_array($dados) == false) {
    header("location:/lpage/include/login.php?error=login_invalido");
    // echo "Não passou no teste";
    die();
} else {
    $_SESSION["dados_usuario"] = $dados;
    header("location:../include/perfil.php");
    // echo "Passou no teste";
    die();
}
?>