<div class="d-flex">
	<div class="mr-auto p-2">
		<h2 class="display-4 titulo">Editar Usuário</h2>
	</div>
	<div class="p-2">
		<?= $this->Html->link(__(' Listar '), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>

		<?= $this->Html->link(__(' Visualizar '), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>

		<?= $this->Form->postLink(__(' Apagar '), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuário {0}?', $user->id)]); ?>
	</div>

</div><hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user); ?>
<div class="form-row">
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Nome</label>
		<?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> E-mail</label>
		<?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'example@hotmail.com', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Usuário</label>
		<?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Grupo de Usuário</label>
		<?= $this->Form->control('group_user_id', ['class' => 'form-control', 'placeholder' => 'Selecione o Grupo de Usuário', 'label' => false]); ?>
	</div>
</div>
<p>
	<span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button('Salvar', ['class' => 'btn btn-outline-warning btn-sm']); ?>
<?= $this->Form->end(); ?>


