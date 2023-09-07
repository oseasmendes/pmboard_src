<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todosevento[]|\Cake\Collection\CollectionInterface $todoseventos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Todosevento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="todoseventos index large-9 medium-8 columns content">
    <h3><?= __('Todoseventos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('todo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horainicial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafinal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnico_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todoseventos as $todosevento): ?>
            <tr>
                <td><?= $this->Number->format($todosevento->id) ?></td>
                <td><?= h($todosevento->data) ?></td>
                <td><?= h($todosevento->created) ?></td>
                <td><?= h($todosevento->modified) ?></td>
                <td><?= $todosevento->has('todo') ? $this->Html->link($todosevento->todo->id, ['controller' => 'Todos', 'action' => 'view', $todosevento->todo->id]) : '' ?></td>
                <td><?= h($todosevento->horainicial) ?></td>
                <td><?= h($todosevento->horafinal) ?></td>
                <td><?= h($todosevento->ticketid) ?></td>
                <td><?= $this->Number->format($todosevento->tecnico_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $todosevento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $todosevento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $todosevento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todosevento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
