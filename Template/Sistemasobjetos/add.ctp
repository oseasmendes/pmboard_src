<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasobjeto $sistemasobjeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasobjetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsobjs'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsobj'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasobjetos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasobjeto) ?>
    <fieldset>
        <legend><?= __('Add Sistemasobjeto') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('objetivo');
            echo $this->Form->control('objetotipo');
            echo $this->Form->control('lastversion');
            echo $this->Form->control('analisepor');
            echo $this->Form->control('desenvolvidoem', ['empty' => true]);
            echo $this->Form->control('desenvolvidopor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
