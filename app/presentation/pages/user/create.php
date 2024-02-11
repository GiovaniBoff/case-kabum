<?php
require_once '../partials/header.php';
?>
<nav class="navbar navbar-light bg-light menu">
    <div class="container">
        <a class="navbar-brand" href="#">
            CRUD PHP POO
        </a>
    </div>
</nav>
<form action="/presentation/controller/UserController.php" method="POST">
    <div class="row">
        <div class="col-md-3">
            <label>Nome</label>
            <input type="text" name="name" value="" autofocus class="form-control" require />
        </div>
        <div class="col-md-5">
            <label>Data de Nascimento</label>
            <input type="text" name="date_of_birth" value="" class="form-control" require />
        </div>
        <div class="col-md-2">
            <label>Cpf</label>
            <input type="text" name="cpf" value="" class="form-control" require />
        </div>
        <div class="col-md-2">
            <label>RG</label>
            <input type="text" name="rg" value="" class="form-control" require />
        </div>
        <div class="col-md-2">
            <label>Telefone</label>
            <input type="text" name="phone" value="" class="form-control" require />
        </div>
        <!-- <div class="col-md-2">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div> -->
        <div class="col-md-2">
            <br>
            <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
        </div>
    </div>
</form>
<?php require_once '../partials/footer.php'; ?>