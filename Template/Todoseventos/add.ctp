<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todosevento $todosevento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Todoseventos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="todoseventos form large-9 medium-8 columns content">
    <?= $this->Form->create($todosevento) ?>
    <fieldset>
        <legend><?= __('Add Todosevento') ?></legend>
        <?php
            echo $this->Form->control('historico');
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('todo_id', ['options' => $todos, 'empty' => true]);
            echo $this->Form->control('horainicial', ['empty' => true]);
            echo $this->Form->control('horafinal', ['empty' => true]);
            echo $this->Form->control('ticketid');
            echo $this->Form->control('tecnico_id');
            echo $this->Form->control('resumo');
            echo $this->Form->control('numerochamado');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
