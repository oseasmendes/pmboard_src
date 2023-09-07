<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todosobservadore $todosobservadore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Todosobservadore'), ['action' => 'edit', $todosobservadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Todosobservadore'), ['action' => 'delete', $todosobservadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todosobservadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Todosobservadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Todosobservadore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="todosobservadores view large-9 medium-8 columns content">
    <h3><?= h($todosobservadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Todo') ?></th>
            <td><?= $todosobservadore->has('todo') ? $this->Html->link($todosobservadore->todo->id, ['controller' => 'Todos', 'action' => 'view', $todosobservadore->todo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $todosobservadore->has('participante') ? $this->Html->link($todosobservadore->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $todosobservadore->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Papel') ?></th>
            <td><?= h($todosobservadore->papel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($todosobservadore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($todosobservadore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($todosobservadore->modified) ?></td>
        </tr>
    </table>
</div>
