<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css" />
    <link rel="stylesheet" href="../style/content/login.css" />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <?php include("header.php")
        ?>
    <section class="form">
        <div class="form-div">
            <h1>Bem vindo a nossa plataforma!</h1>
            <h2>Realize seu Login</h2>
            <form action="../logs/loginUsuario.php" method="post">
                <h3>E-mail</h3>
                <input type="email" name="email" id="email" required>
                <h3>Senha</h3>
                <input type="password" name="senha" id="senha" minlength="5">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "login_invalido") {
                        echo "<p class='error'>Login inválido!</p>";
                    }
                }
                ?>
                <input type="submit" value="Logar">

            </form>
            <p>Não possui uma conta? &nbsp; Cadastre-se <a href="cadastrar.php">aqui</a></p>
        </div>
        <img width="400px" src="../images/Chat bot-bro.svg" alt="">
    </section>
    <?php include("footer.php")
        ?>
</body>

</html>