<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pessoa</h1>

    <form action="<?= base_url('Pessoa/cadastrar') ?>" method="POST">
        <table>
            <tr>
                <td><label for="">Nome</label></td>
                <td><input type="text" name="nome"></td>
            </tr>
            <tr>
                <td><label for="">Sobrenome</label></td>
                <td><input type="text" name="sobrenome"></td>
            </tr>
            <tr>
                <td><label for="">Apelido</label></td>
                <td><input type="text" name="apelido"></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="">CPF</label></td>
                <td><input type="text" name="documento" maxlength="12"></td>
            </tr>
            <tr>
                <td><label for="">Data de nascimento</label></td>
                <td><input type="date" name="data_nasc"></td>
            </tr>
            <tr>
                <td colspan="2"><label>Usuarios</label></td>
            </tr>
            <tr>
                <td><label for="">Usuario</label></td>
                <td><input type="text" name="nomeUsuario"></td>
            </tr>
            <tr>
                <td><label for="">Senha</label></td>
                <td><input type="password" name="senha"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
    <a href="<?= base_url('Login') ?>">Faça Login</a>
</body>

</html>