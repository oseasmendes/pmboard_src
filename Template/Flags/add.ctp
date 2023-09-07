<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flag $flag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kronusitems'), ['controller' => 'Kronusitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['controller' => 'Kronusitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flags form large-9 medium-8 columns content">
    <?= $this->Form->create($flag) ?>
    <fieldset>
        <legend><?= __('Add Flag') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
