<div class="d-flex">
	<div class="mr-auto p-2">
		<h3 class="display-4 titulo"><?= 'Edição do aluno(a) ' . $user->name; ?></h3>
	</div>
	<div class="p-2">

        <?= $this->Html->link(__(' Listar '), ['controller' => 'aluno', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
		<?= $this->Html->link(__(' Visualizar '), ['controller' => 'aluno', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
		<?= $this->Html->link(__(' Apagar '), ['controller' => 'aluno', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => 'Deseja deletar o Aluno?', $user->id]); ?>

	</div>

</div><hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user); ?>
<div class="form-row">
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Nome </label>
		<?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> E-mail </label>
		<?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'example@hotmail.com', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Telefone</label>
		<?= $this->Form->control('telefone', ['class' => 'form-control', 'placeholder' => 'Selecione o Grupo de Usuário', 'label' => false]); ?>
	</div>
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> CPF </label>
		<?= $this->Form->control('cpf', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Sexo </label>
		<?= $this->Form->control('sexo', ['class' => 'form-control', 'placeholder' => 'Selecione o Grupo de Usuário', 'label' => false]); ?>
	</div>
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> UF </label>
		<?= $this->Form->control('uf', ['class' => 'form-control', 'placeholder' => 'Selecione o Grupo de Usuário', 'label' => false]); ?>
	</div>
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Cidade </label>
		<?= $this->Form->control('cidade', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Bairro</label>
		<?= $this->Form->control('bairro', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> CEP </label>
		<?= $this->Form->control('cep', ['class' => 'form-control', 'placeholder' => 'Selecione o Grupo de Usuário', 'label' => false]); ?>
	</div>
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Logradouro </label>
		<?= $this->Form->control('logradouro', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Número </label>
		<?= $this->Form->control('numero', ['class' => 'form-control', 'placeholder' => 'Selecione o Grupo de Usuário', 'label' => false]); ?>
	</div>
    <div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Foto </label>
		<?= $this->Form->control('foto', ['class' => 'form-control', 'label' => false]); ?>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
		<label><span class="text-danger">*</span> Data de Nascimento</label>
		<?= $this->Form->control('dataNascimento', ['class' => 'form-control', 'placeholder' => 'Digite seu nome de usuário', 'label' => false]); ?>
	</div>

</div>
<p>
	<span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button('Salvar', ['class' => 'btn btn-outline-warning btn-sm']); ?>
<?= $this->Form->end(); ?>
<?= $this->layout('aluno'); ?>


