<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pmobalance[]|\Cake\Collection\CollectionInterface $pmobalances
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pmobalance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pmobalanceconsultores'), ['controller' => 'Pmobalanceconsultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pmobalanceconsultore'), ['controller' => 'Pmobalanceconsultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pmobalances index large-9 medium-8 columns content">
    <h3><?= __('Pmobalances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodoinicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodofim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pmobalances as $pmobalance): ?>
            <tr>
                <td><?= $this->Number->format($pmobalance->id) ?></td>
                <td><?= h($pmobalance->descricao) ?></td>
                <td><?= h($pmobalance->data) ?></td>
                <td><?= h($pmobalance->periodoinicio) ?></td>
                <td><?= h($pmobalance->periodofim) ?></td>
                <td><?= $this->Number->format($pmobalance->versao) ?></td>
                <td><?= h($pmobalance->created) ?></td>
                <td><?= h($pmobalance->modified) ?></td>
                <td><?= $pmobalance->has('statusfuncional') ? $this->Html->link($pmobalance->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $pmobalance->statusfuncional->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pmobalance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pmobalance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pmobalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pmobalance->id)]) ?>
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
