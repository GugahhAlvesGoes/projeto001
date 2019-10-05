<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Administrativo';
?>
<!DOCTYPE html>
<?= $this->Form->create('post', ['class' => 'form-signin']) ?>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min']) ?>
    <?= $this->Html->script(['fontawesome-all.min']) ?>
    <?= $this->Html->css(['fontawesome.min', 'dashboard']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <?= 
        $this->Html->link(('Cadastro de Usuários'), ['controller' => 'welcome', 'action' => 'index'], ['class' => 'navbar-brand']);
        ?>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <?= $this->Html->image('aluno.png', ['class' =>'rounded-circle', 'width' => '20', 'height'=>'20']) ?>
                        <span class="d-none d-sm-inline">Usuário</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                    </div>
                </li>
            </ul>                
        </div>
    </nav>

    <div class="d-flex">
        <nav class="sidebar">
            <ul class="list-unstyled">
                <li>
                    <a href="#submenu1" data-toggle="collapse">
                        <i class="fas fa-user"></i> Usuário</a>
                    <ul id="submenu1" class="list-unstyled collapse">
                        <?= $this->Html->link (('Usuários Cadastrados'), ['controller' => 'users', 'action'=> 'index']); ?>  
                        <?= $this->Html->link (('Tipo de Acesso'), ['controller' => '../groupUsers', 'action'=> 'index']); ?>                       
                    </ul>                   
                </li>
                <li>
                    <a href="#submenu2" data-toggle="collapse">
                        <i class="fas fa-user"></i> Alunos</a>
                    <ul id="submenu2" class="list-unstyled collapse">
                        <?= $this->Html->link (('Sessão dos Alunos'), ['controller' => '../aluno', 'action'=> 'index']); ?>  
                    </ul>
                </li>
                <li>
                    <?= $this->Html->link(__(' Sair '), ['controller' => 'users', 'action'=> 'logout']); ?>
                </li>
            </ul>
        </nav>

        <div class="content p-1">
            <div class="list-group-item">

                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>    
    <?= $this->Html->script(['jquery-3.3.1.min', 'popper.min', 'bootstrap.min', 'dashboard']) ?>
</body>
<?= $this->Form->end() ?>
</html>
