<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etapa[]|\Cake\Collection\CollectionInterface $etapas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Etapa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etapas index large-9 medium-8 columns content">
    <h3><?= __('Etapas') ?></h3>
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
            <?php foreach ($etapas as $etapa): ?>
            <tr>
                <td><?= $this->Number->format($etapa->id) ?></td>
                <td><?= h($etapa->descricao) ?></td>
                <td><?= h($etapa->created) ?></td>
                <td><?= h($etapa->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $etapa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etapa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etapa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etapa->id)]) ?>
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
