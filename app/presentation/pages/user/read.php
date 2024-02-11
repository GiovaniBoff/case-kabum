<?php
require_once '../partials/header.php';
?>
<div class="container">
	<?php require_once './create.php' ?>
	<div class="table-responsive">
		<table class="table table-sm table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Data de nascimento</th>
					<th>CPF</th>
					<th>RG</th>
					<th>Telefone</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($users as $user): ?>

						<td>
							<?= $user->getId() ?>
						</td>
						<td>
							<?= $user->getName() ?>
						</td>
						<td>
							<?= $user->getDateOfBirth() ?>
						</td>
						<td>
							<?= $user->getCpf() ?>
						</td>
						<td>
							<?= $user->getRg() ?>
						</td>
						<td>
							<?= $user->getPhone() ?>
						</td>
						<td class="text-center">
							<button class="btn  btn-warning btn-sm" data-toggle="modal"
								data-target="#editar><?= $user->getId() ?>">
								Editar
							</button>
							<a href="/presentation/controller/UserController.php?del=<?= $user->getId() ?>">
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