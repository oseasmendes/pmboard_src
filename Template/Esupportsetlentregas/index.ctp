<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlentrega[]|\Cake\Collection\CollectionInterface $esupportsetlentregas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlentrega'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlentregas index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlentregas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entregastipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlentregas as $esupportsetlentrega): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlentrega->id) ?></td>
                <td><?= h($esupportsetlentrega->canal) ?></td>
                <td><?= h($esupportsetlentrega->descricao) ?></td>
                <td><?= h($esupportsetlentrega->referencia) ?></td>
                <td><?= $esupportsetlentrega->has('entregastipo') ? $this->Html->link($esupportsetlentrega->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $esupportsetlentrega->entregastipo->id]) : '' ?></td>
                <td><?= h($esupportsetlentrega->ativo) ?></td>
                <td><?= h($esupportsetlentrega->created) ?></td>
                <td><?= h($esupportsetlentrega->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlentrega->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlentrega->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlentrega->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlentrega->id)]) ?>
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
