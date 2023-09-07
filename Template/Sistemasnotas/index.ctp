<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasnota[]|\Cake\Collection\CollectionInterface $sistemasnotas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasnota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasnotas index large-9 medium-8 columns content">
    <h3><?= __('Sistemasnotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notatipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasnotas as $sistemasnota): ?>
            <tr>
                <td><?= $this->Number->format($sistemasnota->id) ?></td>
                <td><?= $sistemasnota->has('sistema') ? $this->Html->link($sistemasnota->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasnota->sistema->id]) : '' ?></td>
                <td><?= $sistemasnota->has('notatipo') ? $this->Html->link($sistemasnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $sistemasnota->notatipo->id]) : '' ?></td>
                <td><?= h($sistemasnota->descricao) ?></td>
                <td><?= h($sistemasnota->created) ?></td>
                <td><?= h($sistemasnota->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasnota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasnota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasnota->id)]) ?>
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
