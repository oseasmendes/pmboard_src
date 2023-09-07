<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poolingsmember $poolingsmember
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Poolingsmembers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poolings'), ['controller' => 'Poolings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pooling'), ['controller' => 'Poolings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="poolingsmembers form large-9 medium-8 columns content">
    <?= $this->Form->create($poolingsmember) ?>
    <fieldset>
        <legend><?= __('Add Poolingsmember') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('pooling_id', ['options' => $poolings, 'empty' => true]);
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
