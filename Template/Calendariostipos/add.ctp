<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendariostipo $calendariostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calendariostipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendariostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($calendariostipo) ?>
    <fieldset>
        <legend><?= __('Add Calendariostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('planosimulacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
