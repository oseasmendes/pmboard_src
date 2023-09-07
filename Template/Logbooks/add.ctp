<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbook $logbook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Logbooks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atividadetipos'), ['controller' => 'Atividadetipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividadetipo'), ['controller' => 'Atividadetipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Logbooksitems'), ['controller' => 'Logbooksitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Logbooksitem'), ['controller' => 'Logbooksitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logbooks form large-9 medium-8 columns content">
    <?= $this->Form->create($logbook) ?>
    <fieldset>
        <legend><?= __('Add Logbook') ?></legend>
        <?php
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true]);
            echo $this->Form->control('atividadetipos_id', ['options' => $atividadetipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
