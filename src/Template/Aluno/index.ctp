<!--table>thead>tr>th*4^^tbody>tr>td*4-->
<div class="d-flex">
	<div class="mr-auto p-2">
		<h2 class="display-4 titulo">Lista de Alunos</h2>
	</div>
	<div class="p-2">
		<?= 
		$this->Html->link(__('Cadastrar Novo Aluno'), ['controller' => 'aluno', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']);
		?>
	</div>
</div>
<?= $this->Flash->render() ?>
<div class="table-responsive">
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th class="d-none d-lg-table-cell">Nome</th>
				<th class="d-none d-sm-table-cell">E-mail</th>
				<th class="d-none d-sm-table-cell">Foto</th>
				<th class="d-none d-sm-table-cell">Telefone</th>
				<th class="d-none d-sm-table-cell">CPF</th>
				<th class="d-none d-sm-table-cell">Sexo</th>
				<th class="d-none d-sm-table-cell">Data de Nascimento</th>
				<th class="d-none d-sm-table-cell">UF</th>
				<th class="d-none d-sm-table-cell">Cidade</th>
				<th class="d-none d-sm-table-cell">Bairro</th>
				<th class="d-none d-sm-table-cell">CEP</th>
				<th class="d-none d-sm-table-cell">Logradouro</th>
				<th class="d-none d-sm-table-cell">Número</th>
				<th class="text-center">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($usuarios as $usuario): ?>
				<tr>
					<td><?php echo $usuario->id; ?></td>
					<td><?php echo $usuario->name; ?></td>
					<td class="d-none d-sm-table-cell"><?php echo $usuario->email; ?></td>
					<td><?php echo $usuario->foto; ?></td>
					<td><?php echo $usuario->telefone; ?></td>
					<td><?php echo $usuario->cpf; ?></td>
					<td><?php echo $usuario->sexo; ?></td>
					<td><?php echo $usuario->dataNascimento; ?></td>
					<td><?php echo $usuario->uf; ?></td>
					<td><?php echo $usuario->cidade; ?></td>
					<td><?php echo $usuario->bairro; ?></td>
					<td><?php echo $usuario->cep; ?></td>
					<td><?php echo $usuario->logradouro; ?></td>
					<td><?php echo $usuario->numero; ?></td>
					<td class="text-center">
						<span class="d-none d-md-block">
							<?= $this->Html->link(__(' Visualizar '), ['controller' => 'aluno', 'action' => 'view', $usuario->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
							<?= $this->Html->link(__(' Editar '), ['controller' => 'aluno', 'action' => 'edit', $usuario->id], ['class' => 'btn btn-outline-warning btn-sm']); ?>	
							<?= $this->Html->link(__(' Apagar '), ['controller' => 'aluno', 'action' => 'delete', $usuario->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => 'Deseja deletar o Aluno?', $usuario->id]); ?>
						</span>
						<div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Ações
                            </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                    <?= $this->Html->link(__(' Visualizar '), ['controller' => 'aluno', 'action' => 'view', $usuario->id], ['class' => 'dropdown-item']); ?>
									<?= $this->Html->link(__(' Editar '), ['controller' => 'aluno', 'action' => 'edit', $usuario->id], ['class' => 'dropdown-item']); ?>	
									<?= $this->Html->link(__(' Apagar '), ['controller' => 'aluno', 'action' => 'delete', $usuario->id], ['class' => 'dropdown-item', 'confirm' => 'Deseja deletar o Aluno?', $usuario->id]); ?>
                                </div>
                        </div>	
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?= $this->element('pagination'); ?>
</div>
<?= $this->layout('aluno'); ?>