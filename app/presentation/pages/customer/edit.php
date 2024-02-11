<?php
require_once '../partials/header.php';
?>
<!-- Modal -->
<div class="modal fade" id="editar><?= $customer->getId() ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/presentation/controller/CustomerController.php" method="POST">

                    <div class="col-md-8">
                        <label>Nome</label>
                        <input type="text" name="name" value="<?= $customer->getName() ?>" class="form-control"
                            require />
                    </div>
                    <div class="col-md-8">
                        <label>Data de Nascimento</label>
                        <input type="text" name="date_of_birth" value="<?= $customer->getDateOfBirth() ?>"
                            class="form-control" require />
                    </div>
                    <div class="col-md-8">
                        <label>Cpf</label>
                        <input type="texte" name="cpf" value="<?= $customer->getCpf() ?>" class="form-control"
                            require />
                    </div>
                    <div class="col-md-8">
                        <label>Rg</label>
                        <input type="text" name="rg" value="<?= $customer->getRg() ?>" class="form-control" require />
                    </div>

                    <div class="col-md-8">
                        <label>Telefone</label>
                        <input type="text" name="phone" value="<?= $customer->getPhone() ?>" class="form-control"
                            require />
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <br>
                            <input type="hidden" name="id" value="<?= $customer->getId() ?>" />
                            <button class="btn btn-primary" type="submit" name="editar">Atualizar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>