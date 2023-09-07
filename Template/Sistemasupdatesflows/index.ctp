<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdatesflow[]|\Cake\Collection\CollectionInterface $sistemasupdatesflows
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasupdatesflow'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasupdates'), ['controller' => 'Sistemasupdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasupdate'), ['controller' => 'Sistemasupdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ambientes'), ['controller' => 'Ambientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ambiente'), ['controller' => 'Ambientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasupdatesflows index large-9 medium-8 columns content">
    <h3><?= __('Sistemasupdatesflows') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasupdate_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ambiente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('who') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forwho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataprevistaretorno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataprevistarelizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datarealizadaretorno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datarealizadaoficial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasupdatesflows as $sistemasupdatesflow): ?>
            <tr>
                <td><?= $this->Number->format($sistemasupdatesflow->id) ?></td>
                <td><?= $sistemasupdatesflow->has('sistemasupdate') ? $this->Html->link($sistemasupdatesflow->sistemasupdate->id, ['controller' => 'Sistemasupdates', 'action' => 'view', $sistemasupdatesflow->sistemasupdate->id]) : '' ?></td>
                <td><?= $sistemasupdatesflow->has('motivo') ? $this->Html->link($sistemasupdatesflow->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $sistemasupdatesflow->motivo->id]) : '' ?></td>
                <td><?= $sistemasupdatesflow->has('ambiente') ? $this->Html->link($sistemasupdatesflow->ambiente->descricao, ['controller' => 'Ambientes', 'action' => 'view', $sistemasupdatesflow->ambiente->id]) : '' ?></td>
                <td><?= h($sistemasupdatesflow->who) ?></td>
                <td><?= h($sistemasupdatesflow->forwho) ?></td>
                <td><?= h($sistemasupdatesflow->descricao) ?></td>
                <td><?= h($sistemasupdatesflow->data) ?></td>
                <td><?= h($sistemasupdatesflow->dataprevistaretorno) ?></td>
                <td><?= h($sistemasupdatesflow->dataprevistarelizacao) ?></td>
                <td><?= h($sistemasupdatesflow->datarealizadaretorno) ?></td>
                <td><?= h($sistemasupdatesflow->datarealizadaoficial) ?></td>
                <td><?= $sistemasupdatesflow->has('statusfuncional') ? $this->Html->link($sistemasupdatesflow->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $sistemasupdatesflow->statusfuncional->id]) : '' ?></td>
                <td><?= h($sistemasupdatesflow->created) ?></td>
                <td><?= h($sistemasupdatesflow->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasupdatesflow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasupdatesflow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasupdatesflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasupdatesflow->id)]) ?>
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
