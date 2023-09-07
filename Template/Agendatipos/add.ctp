<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendatipo $agendatipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agendatipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendatipos form large-9 medium-8 columns content">
    <?= $this->Form->create($agendatipo) ?>
    <fieldset>
        <legend><?= __('Add Agendatipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('notificacao');
            echo $this->Form->control('tecnica');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
