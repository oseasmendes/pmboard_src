<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Natureza $natureza
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Naturezas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="naturezas form large-9 medium-8 columns content">
    <?= $this->Form->create($natureza) ?>
    <fieldset>
        <legend><?= __('Add Natureza') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
