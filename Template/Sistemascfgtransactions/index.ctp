<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtransaction[]|\Cake\Collection\CollectionInterface $sistemascfgtransactions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgtransaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgtransactions index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgtransactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nometransacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('urlreferencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modulo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgtransactions as $sistemascfgtransaction): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgtransaction->id) ?></td>
                <td><?= $sistemascfgtransaction->has('sistema') ? $this->Html->link($sistemascfgtransaction->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgtransaction->sistema->id]) : '' ?></td>
                <td><?= h($sistemascfgtransaction->nometransacao) ?></td>
                <td><?= h($sistemascfgtransaction->descricao) ?></td>
                <td><?= h($sistemascfgtransaction->urlreferencia) ?></td>
                <td><?= h($sistemascfgtransaction->created) ?></td>
                <td><?= h($sistemascfgtransaction->modified) ?></td>
                <td><?= h($sistemascfgtransaction->modulo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgtransaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgtransaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgtransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgtransaction->id)]) ?>
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
