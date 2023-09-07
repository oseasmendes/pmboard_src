<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todosobservadore $todosobservadore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $todosobservadore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $todosobservadore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Todosobservadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="todosobservadores form large-9 medium-8 columns content">
    <?= $this->Form->create($todosobservadore) ?>
    <fieldset>
        <legend><?= __('Edit Todosobservadore') ?></legend>
        <?php
            echo $this->Form->control('todo_id', ['options' => $todos, 'empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('papel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
