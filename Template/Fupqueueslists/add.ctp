<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueueslist $fupqueueslist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fupqueueslists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupqueueslists form large-9 medium-8 columns content">
    <?= $this->Form->create($fupqueueslist) ?>
    <fieldset>
        <legend><?= __('Add Fupqueueslist') ?></legend>
        <?php
            echo $this->Form->control('fupqueue_id', ['options' => $fupqueues, 'empty' => true]);
            echo $this->Form->control('lista');
            echo $this->Form->control('emaillist');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
