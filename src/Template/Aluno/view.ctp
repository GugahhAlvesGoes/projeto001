<div class="d-flex">
    <div class="mr-auto p-2">
    	<h3 class="display-4 titulo"><?= 'Detalhes do Aluno ' . $usuario->name; ?></h3>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
        	<?=
        	$this->Html->link(__(' Listar '), ['controller' => 'aluno', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']);
        	?>
            <?=
            $this->Html->link(__(' Editar '), ['controller' => 'aluno', 'action' => 'edit', $usuario->id], ['class' => 'btn btn-outline-warning btn-sm']);
            ?>
            <?= $this->Html->link(__(' Apagar '), ['controller' => 'aluno', 'action' => 'delete', $usuario->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => 'Deseja deletar o Aluno?', $usuario->id]) 
			?>   
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">    
            <?=
        	$this->Html->link(__(' Listar '), ['controller' => 'aluno', 'action' => 'index'], ['class' => 'dropdown-item']);
        	?>
            <?=
            $this->Html->link(__(' Editar '), ['controller' => 'aluno', 'action' => 'edit', $usuario->id], ['class' => 'dropdown-item']);
            ?>
            <?= $this->Html->link(__(' Apagar '), ['controller' => 'aluno', 'action' => 'delete', $usuario->id], ['class' => 'dropdown-item', 'confirm' => 'Deseja deletar o Aluno?', $usuario->id]) 
			?>                                 
            </div>
        </div>
    </div>
</div><hr>
<dl class="row">
	<dt class="col-sm-3 text-truncate">Foto:</dt>
    <dd class="col-sm-9"><?= $usuario->foto; ?></dd>

    <dt class="col-sm-3">ID:</dt>
    <dd class="col-sm-9"><?= $usuario->id; ?></dd>

    <dt class="col-sm-3">Nome:</dt>
    <dd class="col-sm-9"><?= $usuario->name; ?></dd>

    <dt class="col-sm-3">E-mail:</dt>
    <dd class="col-sm-9"><?= $usuario->email; ?></dd>

    <dt class="col-sm-3 text-truncate">Telefone:</dt>
    <dd class="col-sm-9"><?= $usuario->telefone; ?></dd>

    <dt class="col-sm-3 text-truncate">CPF:</dt>
    <dd class="col-sm-9"><?= $usuario->cpf; ?></dd>

    <dt class="col-sm-3 text-truncate">Sexo:</dt>
    <dd class="col-sm-9"><?= $usuario->sexo; ?></dd>

    <dt class="col-sm-3 text-truncate">Data de Nascimento:</dt>
    <dd class="col-sm-9"><?= $usuario->dataNascimento ?></dd>

    <dt class="col-sm-3 text-truncate">UF:</dt>
    <dd class="col-sm-9"><?= $usuario->uf; ?></dd>

    <dt class="col-sm-3">Cidade:</dt>
    <dd class="col-sm-9"><?= $usuario->cidade; ?></dd>

    <dt class="col-sm-3">Bairro:</dt>
    <dd class="col-sm-9"><?= $usuario->bairro; ?></dd>

    <dt class="col-sm-3">CEP:</dt>
    <dd class="col-sm-9"><?= $usuario->cep; ?></dd>

    <dt class="col-sm-3">Logradouro:</dt>
    <dd class="col-sm-9"><?= $usuario->logradouro; ?></dd>

    <dt class="col-sm-3">Número:</dt>
    <dd class="col-sm-9"><?= $usuario->numero; ?></dd>
</dl>
<?= $this->layout('aluno'); ?>
