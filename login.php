<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GCM - Fala Comigo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css_login.css">
    
</head>

<body>
    <main>
        <div class="section">
          <form action="crud/autenticacao.php" method="post">

            <div class="title"> Login - Fala Comigo </div>

            <div class="input">

                <input placeholder="Insira seu email" type="email" id='email' name = "email" required="required">
            </div>

            <div class="input">

                <input placeholder="Insira sua senha" type="password" id='senha' name= "senha" required="required">
            </div>

            <br>
            <br>
            <button type="submit">Logar</button>
            <br>
            <br>
            <p>Deseja realizar o cadastro?</p>
            <div class="cadastrar">
            <a class="btn btn-primary" href="crud/view/usuario_create.php">Cadastro Usuario</a>
            </div>
          </form>

        </div>
    </main>
</body>

</html>