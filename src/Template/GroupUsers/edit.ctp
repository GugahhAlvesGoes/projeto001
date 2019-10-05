<div class="d-flex">
	<div class="mr-auto p-2">
		<h2 class="display-4 titulo">Editar Grupo de Usuário</h2>
	</div>
		
	<div class="p-2">
		<?= $this->Html->link(__(' Listar Grupo'), ['controller' => 'groupUsers', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
        

		<?= $this->Html->link(__(' Visualizar '), ['controller' => 'groupUsers', 'action' => 'view', $groupUser->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>

		<?= $this->Form->postLink(__(' Apagar '), ['controller' => 'groupUsers', 'action' => 'delete', $groupUser->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuário {0}?', $groupUser->id)]); ?>
	</div>

</div><hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($groupUser); ?>
<div class="form-row">
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Nome do Grupo de Usuário</label>
		<?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Novo Grupo de Usuário', 'label' => false]); ?>
	</div>
</div>
<p>
	<span class="text-danger">* </span>Campo obrigatório
</p>
	
<?= $this->Form->button('Salvar', ['class' => 'btn btn-outline-warning btn-sm']); ?>

<div style="float: right">
	<?= $this->Html->link(__(' Listar Usuário'), ['controller' => 'Admin/Users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
</div>

<?= $this->Form->end(); ?>

<?= $this->layout('grupoUsuario'); ?>


