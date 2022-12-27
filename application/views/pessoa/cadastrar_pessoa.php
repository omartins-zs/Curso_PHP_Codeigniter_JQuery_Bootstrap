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
                <td><label for="">Cidade</label></td>
                <td>
                    <div class="form-group">
                        <select id="selectCidades" class="form-control">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                </td>
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
    <br><br><br>

    <button type="button" id="btnGetPessoas" class="btn btn-flat"><i class="fa fa-search"></i>&nbsp; Buscar</button>
    <div class="col-sm-5">

        <div class="box box-primary">

            <table id="tablePessoas" class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Apelido</th>
                    <th>Documento</th>
                    <!-- <th>Email</th> -->
                    <th>Cidade</th>
                    <th style="width: 40px">Label</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-red">55%</span></td>
                </tr>

            </table>
        </div>
    </div>
    <script type="text/javascript">
        var baseUrl = "<?= base_url(); ?>";
    </script>