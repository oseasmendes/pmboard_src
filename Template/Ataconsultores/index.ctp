<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataconsultore[]|\Cake\Collection\CollectionInterface $ataconsultores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ataconsultore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataconsultores index large-9 medium-8 columns content">
    <h3><?= __('Ataconsultores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ataconsultores as $ataconsultore): ?>
            <tr>
                <td><?= $this->Number->format($ataconsultore->id) ?></td>
                <td><?= $ataconsultore->has('ata') ? $this->Html->link($ataconsultore->ata->resumogeral, ['controller' => 'Atas', 'action' => 'view', $ataconsultore->ata->id]) : '' ?></td>
                <td><?= $ataconsultore->has('consultore') ? $this->Html->link($ataconsultore->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $ataconsultore->consultore->id]) : '' ?></td>
                <td><?= h($ataconsultore->created) ?></td>
                <td><?= h($ataconsultore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ataconsultore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ataconsultore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ataconsultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataconsultore->id)]) ?>
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
