<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasmodulo[]|\Cake\Collection\CollectionInterface $sistemasmodulos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasmodulos index large-9 medium-8 columns content">
    <h3><?= __('Sistemasmodulos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasmodulos as $sistemasmodulo): ?>
            <tr>
                <td><?= $this->Number->format($sistemasmodulo->id) ?></td>
                <td><?= $sistemasmodulo->has('sistema') ? $this->Html->link($sistemasmodulo->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasmodulo->sistema->id]) : '' ?></td>
                <td><?= h($sistemasmodulo->nome) ?></td>
                <td><?= h($sistemasmodulo->versao) ?></td>
                <td><?= h($sistemasmodulo->descricao) ?></td>
                <td><?= $sistemasmodulo->has('statusfuncional') ? $this->Html->link($sistemasmodulo->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $sistemasmodulo->statusfuncional->id]) : '' ?></td>
                <td><?= h($sistemasmodulo->created) ?></td>
                <td><?= h($sistemasmodulo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasmodulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasmodulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasmodulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasmodulo->id)]) ?>
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
