<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendariostipo[]|\Cake\Collection\CollectionInterface $calendariostipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Calendariostipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendariostipos index large-9 medium-8 columns content">
    <h3><?= __('Calendariostipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planosimulacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendariostipos as $calendariostipo): ?>
            <tr>
                <td><?= $this->Number->format($calendariostipo->id) ?></td>
                <td><?= h($calendariostipo->descricao) ?></td>
                <td><?= h($calendariostipo->planosimulacao) ?></td>
                <td><?= h($calendariostipo->created) ?></td>
                <td><?= h($calendariostipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $calendariostipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendariostipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendariostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendariostipo->id)]) ?>
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
