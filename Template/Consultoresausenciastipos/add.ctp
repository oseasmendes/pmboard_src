<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresausenciastipo $consultoresausenciastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultoresausenciastipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresausencias'), ['controller' => 'Consultoresausencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresausencia'), ['controller' => 'Consultoresausencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresausenciastipos form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoresausenciastipo) ?>
    <fieldset>
        <legend><?= __('Add Consultoresausenciastipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
