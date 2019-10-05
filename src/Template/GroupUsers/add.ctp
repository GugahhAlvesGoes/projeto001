<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Novo Grupo de Usuário</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(__(' Listar '), ['controller' => 'GroupUsers', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
        </div>
</div><hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($groupUser); ?>
<div class="form-row">
    <div class="form-group col-md-3">
        <label><span class="text-danger">*</span> Nome do Grupo de Usuário</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Digite o novo nome do grupo', 'label' => false]); ?>
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button('Cadastrar', ['class' => 'btn btn-outline-success btn-sm']); ?>
<?= $this->Form->end(); ?>
<?= $this->layout('grupoUsuario'); ?>