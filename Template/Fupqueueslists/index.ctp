<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueueslist[]|\Cake\Collection\CollectionInterface $fupqueueslists
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fupqueueslist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupqueueslists index large-9 medium-8 columns content">
    <h3><?= __('Fupqueueslists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fupqueue_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fupqueueslists as $fupqueueslist): ?>
            <tr>
                <td><?= $this->Number->format($fupqueueslist->id) ?></td>
                <td><?= $fupqueueslist->has('fupqueue') ? $this->Html->link($fupqueueslist->fupqueue->descricao, ['controller' => 'Fupqueues', 'action' => 'view', $fupqueueslist->fupqueue->id]) : '' ?></td>
                <td><?= h($fupqueueslist->lista) ?></td>
                <td><?= h($fupqueueslist->created) ?></td>
                <td><?= h($fupqueueslist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupqueueslist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupqueueslist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupqueueslist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueueslist->id)]) ?>
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
