<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlbus[]|\Cake\Collection\CollectionInterface $esupportsetlbus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlbus'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresasunidades'), ['controller' => 'Empresasunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresasunidade'), ['controller' => 'Empresasunidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlbus index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlbus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresasunidade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlbus as $esupportsetlbus): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlbus->id) ?></td>
                <td><?= h($esupportsetlbus->canal) ?></td>
                <td><?= h($esupportsetlbus->descricao) ?></td>
                <td><?= h($esupportsetlbus->referencia) ?></td>
                <td><?= $esupportsetlbus->has('empresasunidade') ? $this->Html->link($esupportsetlbus->empresasunidade->descricao, ['controller' => 'Empresasunidades', 'action' => 'view', $esupportsetlbus->empresasunidade->id]) : '' ?></td>
                <td><?= h($esupportsetlbus->ativo) ?></td>
                <td><?= h($esupportsetlbus->created) ?></td>
                <td><?= h($esupportsetlbus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlbus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlbus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlbus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlbus->id)]) ?>
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
