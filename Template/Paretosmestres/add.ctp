<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paretosmestre $paretosmestre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Paretosmestres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paretosmestres form large-9 medium-8 columns content">
    <?= $this->Form->create($paretosmestre) ?>
    <fieldset>
        <legend><?= __('Add Paretosmestre') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
