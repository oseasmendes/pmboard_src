<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasusuario $sistemasusuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasusuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasusuario) ?>
            <?php $paramid = $_POST['UserNew']; ?>            
            <?php $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            
            //echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            //echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id  
            
            echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
            echo $this->Form->control('nome',['class'=> "form-control"]);
            echo $this->Form->control('ramal',['class'=> "form-control"]);
            echo $this->Form->control('responsabilidade_id', ['options' => $responsabilidades, 'empty' => true]);
            echo $this->Form->control('usuariostipo_id', ['options' => $usuariostipos, 'empty' => true]);
            echo $this->Form->control('empresa',['class'=> "form-control"]);
            echo $this->Form->control('statususuario',['class'=> "form-control"]);
            echo $this->Form->control('autenticacao',['class'=> "form-control"]);
            echo $this->Form->control('login',['class'=> "form-control"]);
            echo $this->Form->control('passwordapp',['class'=> "form-control"]);
            echo $this->Form->control('knowhow_id', ['options' => $knowhows, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
