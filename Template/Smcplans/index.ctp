<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Smcplan[]|\Cake\Collection\CollectionInterface $smcplans
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Smcplan'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="smcplans index large-9 medium-8 columns content">
    <h3><?= __('Smcplans') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pmg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smcplans as $smcplan): ?>
            <tr>
                <td><?= $this->Number->format($smcplan->id) ?></td>
                <td><?= h($smcplan->descricao) ?></td>
                <td><?= h($smcplan->created) ?></td>
                <td><?= h($smcplan->modified) ?></td>
                <td><?= h($smcplan->pmg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $smcplan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $smcplan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $smcplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smcplan->id)]) ?>
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
