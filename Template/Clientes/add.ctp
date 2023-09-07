<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientesalocs'), ['controller' => 'Clientesalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clientesaloc'), ['controller' => 'Clientesalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Add Cliente') ?></legend>
        <?php
            echo $this->Form->control('nomepesquisa',['class'=> "form-control"]);
            echo $this->Form->control('cep',['class'=> "form-control"]);
            echo $this->Form->control('telefonemovel',['class'=> "form-control"]);
            echo $this->Form->control('email',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
