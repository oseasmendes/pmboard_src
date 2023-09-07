<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillarsresponsability[]|\Cake\Collection\CollectionInterface $pillarsresponsabilities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pillarsresponsability'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pillarsresponsabilities index large-9 medium-8 columns content">
    <h3><?= __('Pillarsresponsabilities') ?></h3>
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
            <?php foreach ($pillarsresponsabilities as $pillarsresponsability): ?>
            <tr>
                <td><?= $this->Number->format($pillarsresponsability->id) ?></td>
                <td><?= h($pillarsresponsability->descricao) ?></td>
                <td><?= h($pillarsresponsability->created) ?></td>
                <td><?= h($pillarsresponsability->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pillarsresponsability->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pillarsresponsability->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pillarsresponsability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pillarsresponsability->id)]) ?>
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
