<?php
require_once '../partials/header.php';
?>
<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/presentation/controller/CustomerController.php" method="POST">
                <!-- <div class="row"> -->
                <div class="col-md-7">
                    <label>Nome</label>
                    <input type="text" name="name" value="" autofocus class="form-control" require />
                </div>
                <div class="col-md-7">
                    <label>Data de Nascimento</label>
                    <input type="text" name="date_of_birth" value="" class="form-control" require />
                </div>
                <div class="col-md-7">
                    <label>Cpf</label>
                    <input type="text" name="cpf" value="" class="form-control" require />
                </div>
                <div class="col-md-7">
                    <label>RG</label>
                    <input type="text" name="rg" value="" class="form-control" require />
                </div>
                <div class="col-md-7">
                    <label>Telefone</label>
                    <input type="text" name="phone" value="" class="form-control" require />
                </div>
                <div class="col-md-7">
                    <label>Endereço</label>
                    <input type="text" name="street" value="" class="form-control" require />
                </div>
                <div class="col-md-7">
                    </br>
                    <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
                    </br>
                </div>
                <!-- </div> -->
            </form>
        </div>

    </div>
</div>
</div>
<?php require_once '../partials/footer.php'; ?>