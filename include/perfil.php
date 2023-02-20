<?php
session_start();

if (!isset($_SESSION["dados_usuario"]["email"]) || !isset($_SESSION["dados_usuario"]["senha"])) {
    header('location: ./login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />
    <link rel="stylesheet" href="../style/main.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Tech Bot - Seu Perfil</title>
</head>

<body>
    <?php include("header.php");
    ?>
    <main class="content">
        <section class="content-section">
            <div>
                <h1>Seu usuário:
                    <?php echo $_SESSION["dados_usuario"]["nome"]; ?>
                </h1>
                <h2>Seu e-mail:
                    <?php echo $_SESSION["dados_usuario"]["email"]; ?>
                </h2>
                <h2>Sua senha:
                    <?php echo $_SESSION["dados_usuario"]["senha"]; ?>
                </h2>
                <a href="logout.php">Deslogar</a>
            </div>
            <img style="height: 400px" src="../images/Profile Interface-rafiki.svg" alt="" />
        </section>
        <!-- <section class="content-middle">
            <h3>O que ele faz pelo seu sistema?</h3>
            <p class="text">
                1. Cria um <strong>Captcha para a verificação</strong> de novos
                usuários, para garantir que não sejam robôs.
            </p>
            <p class="text">
                2. Possui um <strong>sistema de banimento automático</strong> para
                arquivos e commits suspeitos.
            </p>
            <p class="text">
                3. <strong>Sistema de avisos</strong> e banimentos manuais para
                administradoras utilizarem.
            </p>
        </section> -->
    </main>
    <?php include("footer.php");
    ?>
</body>

</html>