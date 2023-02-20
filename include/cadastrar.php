<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/content/cadastrar.css">
  <title>Cadastre</title>
</head>

<body>
  <?php include("header.php")
    ?>
  <section class="form">
    <div class="form-div">
      <h1>Bem vindo a nossa plataforma!</h1>
      <h2>Cadastre-se</h2>
      <form action="../cadastro/cadastroUsuario.php" method="post">
        <h3>Nome</h3>
        <input type="text" name="nome" id="nome" required>
        <h3>E-mail</h3>
        <input type="email" name="email" id="email" required>
        <h3>Senha</h3>
        <input type="password" name="senha" id="senha" minlength="5">
        <input type="submit" value="Cadastrar">
      </form>
      <p>Já possui uma conta? &nbsp; Entre <a href="login.php">aqui</a></p>
    </div>
    <img width="400px" src="../images/Chat bot-bro.svg" alt="">
  </section>
  <?php include("footer.php")
    ?>
</body>

</html>