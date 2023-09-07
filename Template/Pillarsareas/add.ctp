<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillarsarea $pillarsarea
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pillarsareas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pillarsareas form large-9 medium-8 columns content">
    <?= $this->Form->create($pillarsarea) ?>
    <fieldset>
        <legend><?= __('Add Pillarsarea') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
