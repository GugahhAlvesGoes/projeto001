<div class="d-flex">
    <div class="mr-auto p-2">
    	<h3 class="display-4 titulo"><?= 'Detalhes do Usuário ' . $groupUser->nome_group_user; ?></h3>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
           	<?=
        	$this->Html->link(__(' Listar '), ['controller' => 'groupUsers', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']);
        	?>
            <?=
            $this->Html->link(__(' Editar '), ['controller' => 'groupUsers', 'action' => 'edit', $groupUser->id], ['class' => 'btn btn-outline-warning btn-sm']);
            ?>
            <?= $this->Html->link(__(' Apagar '), ['controller' => 'groupUsers', 'action' => 'delete', $groupUser->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => 'Deseja deletar o Grupo de Usuário?', $groupUser->id]) 
			?>   
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">    
            <?=
        	$this->Html->link(__(' Listar '), ['controller' => 'groupUsers', 'action' => 'index'], ['class' => 'dropdown-item']);
        	?>
            <?=
            $this->Html->link(__(' Editar '), ['controller' => 'groupUsers', 'action' => 'edit', $groupUser->id], ['class' => 'dropdown-item']);
            ?>
            <?= $this->Html->link(__(' Apagar '), ['controller' => 'groupUsers', 'action' => 'delete', $groupUser->id], ['class' => 'dropdown-item', 'confirm' => 'Deseja deletar o Grupo de Usuário?', $groupUser->id]) 
			?>                                 
            </div>
        </div>
    </div>
</div><hr>

<div style="float: right">
<?= 
    $this->Html->link(__('Cadastrar Novo Grupo'), ['controller' => 'groupUsers', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']); 
?>
</div>

<dl class="row">
    <dt class="col-sm-3">ID:</dt>
    <dd class="col-sm-9"><?= $groupUser->id; ?></dd>

    <dt class="col-sm-3">Nome do Grupo de Usuário:</dt>
    <dd class="col-sm-9"><?= $groupUser->nome_group_user; ?></dd>

    <dt class="col-sm-3">Data de Cadastro:</dt>
    <dd class="col-sm-9"><?= $groupUser->created; ?></dd>

    <dt class="col-sm-3 text-truncate">Data de Alteração:</dt>
    <dd class="col-sm-9"><?= $groupUser->modified; ?></dd>



</dl>


<?= $this->layout('grupoUsuario'); ?>