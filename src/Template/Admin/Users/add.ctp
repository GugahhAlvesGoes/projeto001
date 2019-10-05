<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Usuário</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(__(' Listar '), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
        </div>
</div><hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user); ?>
<div class="form-row">
    <div class="form-group col-md-4">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-4">
        <label><span class="text-danger">*</span> E-mail</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'example@hotmail.com', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-4">
        <label><span class="text-danger">*</span> Grupo de Usuário</label>
        <?= $this->Form->control('group_user_id', ['class' => 'form-control', 'value'=>'' , 'label' => false]); ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Digite sua senha, min: 2 máx: 12 caracteres', 'label' => false]); ?>
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button('Cadastrar', ['class' => 'btn btn-outline-success btn-sm']); ?>
<?= $this->Form->end(); ?>
