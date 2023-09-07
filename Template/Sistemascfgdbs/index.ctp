<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdb[]|\Cake\Collection\CollectionInterface $sistemascfgdbs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbdets'), ['controller' => 'Sistemascfgdbdets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdbdet'), ['controller' => 'Sistemascfgdbdets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgdbs index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgdbs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ipaddress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgdbs as $sistemascfgdb): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgdb->id) ?></td>
                <td><?= $sistemascfgdb->has('sistema') ? $this->Html->link($sistemascfgdb->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgdb->sistema->id]) : '' ?></td>
                <td><?= $sistemascfgdb->has('banco') ? $this->Html->link($sistemascfgdb->banco->descricao, ['controller' => 'Bancos', 'action' => 'view', $sistemascfgdb->banco->id]) : '' ?></td>
                <td><?= h($sistemascfgdb->descricao) ?></td>
                <td><?= h($sistemascfgdb->contato) ?></td>
                <td><?= h($sistemascfgdb->ipaddress) ?></td>
                <td><?= h($sistemascfgdb->conn) ?></td>
                <td><?= h($sistemascfgdb->versao) ?></td>
                <td><?= h($sistemascfgdb->created) ?></td>
                <td><?= h($sistemascfgdb->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgdb->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgdb->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgdb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdb->id)]) ?>
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
