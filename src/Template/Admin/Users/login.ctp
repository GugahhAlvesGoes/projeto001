<?= $this->Form->create('post', ['class' => 'form-signin']) ?>
<?= $this->Html->image('aluno.png', ['class' => 'mb-4', 'alt' => 'Aluno', 'width' => '72', 'height'=>'72']) ?>
<h1 class="h3 mb-3 font-weight-normal">Cadastro de Alunos</h1>

<?= $this->Flash->render(); ?>

<div class="form-group">
    <label>Grupo de Usuário</label>
    
    <?= $this->Form->control('group_user_id', ['class'=> 'form-control', 'placeholder' => 'Altere sua permissão', 'label' => false]) ?>
</div>

<div class="form-group">
    <label>Usuário</label>
    <?= $this->Form->control('username', ['class'=> 'form-control', 'placeholder' => 'Digite o usuário', 'label' => false]) ?>
</div>

<div class="form-group">
    <label>Senha</label>
    <?= $this->Form->control('password', ['class'=> 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
</div>

<?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>

<p class="text-center">Esqueceu a senha?</p>

<?= $this->Form->end() ?>
