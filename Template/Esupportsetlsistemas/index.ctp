<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlsistema[]|\Cake\Collection\CollectionInterface $esupportsetlsistemas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlsistema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlsistemas index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlsistemas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasmodulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlsistemas as $esupportsetlsistema): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlsistema->id) ?></td>
                <td><?= h($esupportsetlsistema->canal) ?></td>
                <td><?= h($esupportsetlsistema->descricao) ?></td>
                <td><?= h($esupportsetlsistema->referencia) ?></td>
                <td><?= $esupportsetlsistema->has('sistema') ? $this->Html->link($esupportsetlsistema->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $esupportsetlsistema->sistema->id]) : '' ?></td>
                <td><?= $esupportsetlsistema->has('sistemasmodulo') ? $this->Html->link($esupportsetlsistema->sistemasmodulo->id, ['controller' => 'Sistemasmodulos', 'action' => 'view', $esupportsetlsistema->sistemasmodulo->id]) : '' ?></td>
                <td><?= h($esupportsetlsistema->ativo) ?></td>
                <td><?= h($esupportsetlsistema->created) ?></td>
                <td><?= h($esupportsetlsistema->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlsistema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlsistema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlsistema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlsistema->id)]) ?>
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
