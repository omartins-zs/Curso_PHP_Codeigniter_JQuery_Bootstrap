<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="<?= base_url() ?>pessoa/atualizar" method="post">
        <?php echo "Usuario :" . $this->session->userdata('s_usuario'); ?>
        <h1>Atualizar os dados</h1>
        <input type="text" name="nome" placeholder="Ex:Jorge"></input><br><br>
        <input type="text" name="sobrenome" placeholder="Ex:Souza"></input><br><br>
        <input type="text" name="apelido" placeholder="Apelido"></input><br><br>
        <input type="text" name="email" placeholder="Ex:jorge@email.com"></input><br><br>
        <input type="submit" value="Atualizar"></input><br>
    </form>

    <form action="<?= base_url() ?>pessoa/delete" method="post">
        <h1>Eliminar por id</h1>
        <input type="text" name="idPessoa" placeholder="ID"></input><br><br>
        <input type="submit" value="Deletar"></input><br>
    </form>
</body>

</html>