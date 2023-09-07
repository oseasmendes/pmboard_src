<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banco[]|\Cake\Collection\CollectionInterface $bancos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sh Appbancos'), ['controller' => 'ShAppbancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sh Appbanco'), ['controller' => 'ShAppbancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bancos index large-9 medium-8 columns content">
    <h3><?= __('Bancos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bancos as $banco): ?>
            <tr>
                <td><?= $this->Number->format($banco->id) ?></td>
                <td><?= h($banco->descricao) ?></td>
                <td><?= h($banco->created) ?></td>
                <td><?= h($banco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $banco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?>
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
