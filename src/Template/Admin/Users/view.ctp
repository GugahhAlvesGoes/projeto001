<div class="d-flex">
    <div class="mr-auto p-2">
    	<h3 class="display-4 titulo"><?= 'Detalhes do Usuário ' . $usuario->name; ?></h3>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
        	<?=
        	$this->Html->link(__(' Listar '), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']);
        	?>
            <?=
            $this->Html->link(__(' Editar '), ['controller' => 'users', 'action' => 'edit', $usuario->id], ['class' => 'btn btn-outline-warning btn-sm']);
            ?>
            <?= $this->Html->link(__(' Apagar '), ['controller' => 'users', 'action' => 'delete', $usuario->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => 'Deseja deletar o usuário?', $usuario->id]) 
			?>   
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">    
            <?=
        	$this->Html->link(__(' Listar '), ['controller' => 'users', 'action' => 'index'], ['class' => 'dropdown-item']);
        	?>
            <?=
            $this->Html->link(__(' Editar '), ['controller' => 'users', 'action' => 'edit', $usuario->id], ['class' => 'dropdown-item']);
            ?>
            <?= $this->Html->link(__(' Apagar '), ['controller' => 'users', 'action' => 'delete', $usuario->id], ['class' => 'dropdown-item', 'confirm' => 'Deseja deletar o usuário?', $usuario->id]) 
			?>                                 
            </div>
        </div>
    </div>
</div><hr>


<dl class="row">
    <dt class="col-sm-3">ID:</dt>
    <dd class="col-sm-9"><?= $usuario->id; ?></dd>

    <dt class="col-sm-3">Nome:</dt>
    <dd class="col-sm-9"><?= $usuario->name; ?></dd>

    <dt class="col-sm-3">E-mail:</dt>
    <dd class="col-sm-9"><?= $usuario->email; ?></dd>

    <dt class="col-sm-3 text-truncate">Grupo de Usuários:</dt>
    <dd class="col-sm-9"><?= $usuario->group_user_id; ?></dd>

    <dt class="col-sm-3">Usuário:</dt>
    <dd class="col-sm-9"><?= $usuario->username; ?></dd>

    <dt class="col-sm-3">Data de Cadastro:</dt>
    <dd class="col-sm-9"><?= $usuario->created; ?></dd>

    <dt class="col-sm-3">Data de Alteração:</dt>
    <dd class="col-sm-9"><?= $usuario->modified; ?></dd>
</dl>