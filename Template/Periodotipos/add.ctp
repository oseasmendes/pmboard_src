<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodotipo $periodotipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Periodotipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodotipos form large-9 medium-8 columns content">
    <?= $this->Form->create($periodotipo) ?>
    <fieldset>
        <legend><?= __('Add Periodotipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('dias');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
