<?php
require_once '../partials/header.php';
?>
<div class="container">

	<?php require_once './create.php' ?>
	<div class="table-responsive">
		<nav class="navbar navbar-light bg-light menu">
			<div class="container">
				<a class="navbar-brand" href="#">
					Gerencie Clientes
				</a>
				<button class="btn btn-primary" data-toggle="modal" data-target="#cadastrar">Cadastrar</button>
			</div>
		</nav>
		<table class="table table-sm table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Data de nascimento</th>
					<th>CPF</th>
					<th>RG</th>
					<th>Telefone</th>
					<th>Endereços</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($customers as $customer): ?>

						<td>
							<?= $customer->getId() ?>
						</td>
						<td>
							<?= $customer->getName() ?>
						</td>
						<td>
							<?= $customer->getDateOfBirth() ?>
						</td>
						<td>
							<?= $customer->getCpf() ?>
						</td>
						<td>
							<?= $customer->getRg() ?>
						</td>
						<td>
							<?= $customer->getPhone() ?>
						</td>
						<td>
							<?= $customer->getAddress() ?>
						</td>
						<td class="text-center">
							<button class="btn  btn-warning btn-sm" data-toggle="modal"
								data-target="#editar><?= $customer->getId() ?>">
								Editar
							</button>
							<a href="/presentation/controller/CustomerController.php?del=<?= $customer->getId() ?>">
								<button class="btn  btn-danger btn-sm" type="button">Excluir</button>
							</a>
						</td>
					</tr>
					<?php require './edit.php' ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<?php require_once '../partials/footer.php'; ?>