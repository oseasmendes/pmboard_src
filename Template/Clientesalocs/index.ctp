<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientesaloc[]|\Cake\Collection\CollectionInterface $clientesalocs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Clientesaloc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientesalocs index large-9 medium-8 columns content">
    <h3><?= __('Clientesalocs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientesalocs as $clientesaloc): ?>
            <tr>
                <td><?= $this->Number->format($clientesaloc->id) ?></td>
                <td><?= h($clientesaloc->descricao) ?></td>
                <td><?= h($clientesaloc->codenome) ?></td>
                <td><?= h($clientesaloc->created) ?></td>
                <td><?= h($clientesaloc->modified) ?></td>
                <td><?= $clientesaloc->has('cliente') ? $this->Html->link($clientesaloc->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $clientesaloc->cliente->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clientesaloc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientesaloc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientesaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesaloc->id)]) ?>
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
