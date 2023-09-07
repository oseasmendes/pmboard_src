<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todosevento $todosevento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Todosevento'), ['action' => 'edit', $todosevento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Todosevento'), ['action' => 'delete', $todosevento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todosevento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Todoseventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Todosevento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="todoseventos view large-9 medium-8 columns content">
    <h3><?= h($todosevento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Todo') ?></th>
            <td><?= $todosevento->has('todo') ? $this->Html->link($todosevento->todo->Assunto, ['controller' => 'Todos', 'action' => 'view', $todosevento->todo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketid') ?></th>
            <td><?= h($todosevento->ticketid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($todosevento->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numerochamado') ?></th>
            <td><?= h($todosevento->numerochamado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $todosevento->has('consultore') ? $this->Html->link($todosevento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $todosevento->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($todosevento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnico Id') ?></th>
            <td><?= $this->Number->format($todosevento->tecnico_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($todosevento->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($todosevento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($todosevento->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horainicial') ?></th>
            <td><?= h($todosevento->horainicial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horafinal') ?></th>
            <td><?= h($todosevento->horafinal) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($todosevento->historico)); ?>
    </div>
</div>
