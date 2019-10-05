<!--table>thead>tr>th*4^^tbody>tr>td*4-->
<div class="d-flex">
	<div class="mr-auto p-2">
		<h2 class="display-4 titulo">Grupo de Usuários</h2>
	</div>
	<div class="p-2">
		<?= 
		$this->Html->link(__('Cadastrar Novo Grupo'), ['controller' => 'groupUsers', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']);
		?>
	</div>
</div>
<?= $this->Flash->render() ?>
<div class="table-responsive">
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th class="d-none d-lg-table-cell">Nome do Grupo de Usuário</th>
				<th class="d-none d-sm-table-cell">Data de criação</th>
				<th class="text-center">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($groupUsers as $groupUser): ?>
				<tr>
					<td><?php echo $this->Number->format($groupUser->id) ?></td>
					<td><?php echo $groupUser->nome_group_user; ?></td>
					<td><?php echo $groupUser->created; ?></td>
					
					<td class="text-center">
						<?= $this->Html->link(__(' Visualizar '), ['controller' => 'groupUsers', 'action' => 'view', $groupUser->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
						<?= $this->Html->link(__(' Editar '), ['controller' => 'groupUsers', 'action' => 'edit', $groupUser->id], ['class' => 'btn btn-outline-warning btn-sm']); ?>	
						<?= $this->Html->link(__(' Apagar '), ['controller' => 'groupUsers', 'action' => 'delete', $groupUser->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => 'Deseja deletar o Grupo de Usuário?', $groupUser->id]); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?= $this->element('pagination'); ?>
</div>
<?= $this->layout('grupoUsuario'); ?>
