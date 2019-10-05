<div class="d-flex">
	<div class="mr-auto p-2">
		<h2 class="display-4 titulo">Cadastrar Aluno</h2>
	</div>
	<div class="p-2">
		<?= $this->Html->link(__(' Listar '), ['controller' => 'aluno', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
	</div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($user); ?>
<div class="form-row">
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Nome:</label>
		<?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> E-mail:</label>
		<?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'example@hotmail.com', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Telefone:</label>
		<?= $this->Form->control('telefone', ['class' => 'form-control', 'placeholder' => '(00) 9 0000-0000', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> CPF:</label>
		<?= $this->Form->control('cpf', ['class' => 'form-control', 'placeholder' => '123.456.789-00', 'label' => false]); ?>
	</div>

</div>

<div class="form-row">
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Sexo:</label>
		<?= $this->Form->control('sexo', ['class' => 'form-control', 'placeholder' => 'M ou F', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> UF:</label>
		<?= $this->Form->control('uf', ['class' => 'form-control', 'placeholder' => 'Selecione seu estado', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Cidade:</label>
		<?= $this->Form->control('cidade', ['class' => 'form-control', 'placeholder' => 'Selecione sua cidade', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Bairro:</label>
		<?= $this->Form->control('bairro', ['class' => 'form-control', 'placeholder' => 'Selecione seu bairro', 'label' => false]); ?>
	</div>
</div>
<div class="form-row">
	
</div>
<div class="form-row">
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> CEP:</label>
		<?= $this->Form->control('cep', ['class' => 'form-control', 'placeholder' => '00000-000', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Logradouro:</label>
		<?= $this->Form->control('logradouro', ['class' => 'form-control', 'placeholder' => 'Digite seu endereço', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Número:</label>
		<?= $this->Form->control('numero', ['class' => 'form-control', 'placeholder' => 'Digite o número da sua residência', 'label' => false]); ?>
	</div>
	<div class="form-group col-md-3">
		<label><span class="text-danger">*</span> Foto:</label>
		<?= $this->Form->control('foto', ['class' => 'form-control', 'label' => false]); ?>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label><span class="text-danger">*</span> Data de Nascimento:</label>
		<?= $this->Form->control('dataNascimento', ['class' => 'form-control', 'label' => false]); ?>
	</div>
</div>
<div class="form-row">
	
</div>
<p>
	<span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button('Cadastrar', ['class' => 'btn btn-outline-success btn-sm']); ?>
<?= $this->Form->end(); ?>
<?= $this->layout('aluno'); ?>


