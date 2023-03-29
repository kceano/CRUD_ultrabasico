<?php
include_once "Conexao.php";
include_once "dao/UsuarioDAO.php";
include_once "model/Usuario.php";

//Instancia das Classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/blood.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
    <title>Listagem de Doadores - iSangue</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style> 
body {
  font-family: 'Chakra Petch', sans-serif;
  color: #384047;
}
    </style>

</head>

<body>

    <?php include 'Header.php' ?>
    <div class="container">
        <h3>Doadores cadastrados: </h3>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID: </th>
                        <th>Nome: </th>
                        <th>Email: </th>
                        <th>Tipo Sanguíneo: </th>
                        <th>Peso: </th>
                        <th>Altura: </th>
                        <th>Idade: </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariodao->read() as $usuario) : ?>
                        <tr>
                            <td><?= $usuario->getId() ?></td>
                            <td><?= $usuario->getNome() ?></td>
                            <td><?= $usuario->getEmail() ?></td>
                            <td><?= $usuario->getTipoSang() ?></td>
                            <td><?= $usuario->getPeso() ?></td>
                            <td><?= $usuario->getAltura() ?></td>
                            <td><?= $usuario->getIdade() ?></td>

                            <td>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editar<?= $usuario->getId() ?>">
                                    Editar
                                </button>
                                <a href="control/UsuarioController.php?del=<?= $usuario->getId() ?>">
                                    <button class="btn btn-danger btn-sm">
                                        Excluir
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <!-- modal -->
                        <div class="modal fade" id="editar<?= $usuario->getId() ?>" tabindex="1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar</h5>
                                    </div>
                                    <div class="modal-body">


                                        <form action="control/UsuarioController.php" method="post">
                                            <div class="row">
                                                <input type="number" name="id" value="<?= $usuario->getId() ?>" hidden />

                                                <div class="col-md-3">
                                                    <label for="nome">Nome: </label>
                                                    <input type="text" value="<?= $usuario->getNome() ?>" id="nome" name="nome" class="form-control" require />
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="email">Email: </label>
                                                    <input type="text" name="email" value="<?= $usuario->getEmail() ?>" id="email" class="form-control" require />
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="tiposang">Tipo Sanguíneo: </label>
                                                    <select name="tiposang" id="tiposang" class="form-control" require>
                                                        <option value="A+" <?= ($usuario->getTipoSang() === 'A+') ? 'selected' : '' ?>>A+</option>
                                                        <option value="A-" <?= ($usuario->getTipoSang() === 'A-') ? 'selected' : '' ?>>A-</option>
                                                        <option value="AB+" <?= ($usuario->getTipoSang() === 'AB+') ? 'selected' : '' ?>>AB+</option>
                                                        <option value="AB-" <?= ($usuario->getTipoSang() === 'AB-') ? 'selected' : '' ?>>AB-</option>
                                                        <option value="B+" <?= ($usuario->getTipoSang() === 'B+') ? 'selected' : '' ?>>B+</option>
                                                        <option value="B-" <?= ($usuario->getTipoSang() === 'B-') ? 'selected' : '' ?>>B-</option>
                                                        <option value="O+" <?= ($usuario->getTipoSang() === 'O+') ? 'selected' : '' ?>>O+</option>
                                                        <option value="O-" <?= ($usuario->getTipoSang() === 'O-') ? 'selected' : '' ?>>O-</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="peso">Peso: </label>
                                                    <input type="text" name="peso" value="<?= $usuario->getPeso() ?>" id="peso" class="form-control" require />
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="altura">Altura: </label>
                                                    <input type="text" name="altura" value="<?= $usuario->getAltura() ?>" id="altura" class="form-control" require />
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="idade">Idade: </label>
                                                    <input type="text" name="idade" value="<?= $usuario->getIdade() ?>" id="idade" class="form-control" require />
                                                </div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary" name="atualizar">Atualizar</button>
                                                </div>
                                            </div>
                                        </form>


                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>