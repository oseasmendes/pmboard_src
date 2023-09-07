<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlentrega $esupportsetlentrega
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Esupportsetlentregas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlentregas form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetlentrega) ?>
    <fieldset>
        <legend><?= __('Add Esupportsetlentrega') ?></legend>
        <?php
            echo $this->Form->control('canal');
            echo $this->Form->control('descricao');
            echo $this->Form->control('referencia');
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
