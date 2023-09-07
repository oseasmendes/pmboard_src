<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataaprovadore[]|\Cake\Collection\CollectionInterface $ataaprovadores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ataaprovadore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataaprovadores index large-9 medium-8 columns content">
    <h3><?= __('Ataaprovadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aprovacao_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aprovacao_data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ataaprovadores as $ataaprovadore): ?>
            <tr>
                <td><?= $this->Number->format($ataaprovadore->id) ?></td>
                <td><?= $ataaprovadore->has('ata') ? $this->Html->link($ataaprovadore->ata->id, ['controller' => 'Atas', 'action' => 'view', $ataaprovadore->ata->id]) : '' ?></td>
                <td><?= $ataaprovadore->has('participante') ? $this->Html->link($ataaprovadore->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ataaprovadore->participante->id]) : '' ?></td>
                <td><?= h($ataaprovadore->aprovacao_status) ?></td>
                <td><?= h($ataaprovadore->aprovacao_data) ?></td>
                <td><?= h($ataaprovadore->created) ?></td>
                <td><?= h($ataaprovadore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ataaprovadore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ataaprovadore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ataaprovadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataaprovadore->id)]) ?>
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
