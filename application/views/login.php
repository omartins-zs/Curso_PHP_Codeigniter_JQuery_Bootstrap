<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="<?= base_url() ?>login/ingressar" method="post">
        <table>
            <tr>
                <td><label for="">Usuario</label></td>
                <td><input type="text" name="nomeUsuario"></td>
            </tr>
            <tr>
                <td><label for="">Senha</label></td>
                <td><input type="passowrd" name="senha"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Entrar"></td>
            </tr>
        </table>
    </form>
    <?= $mensagem ?>
</body>

</html>