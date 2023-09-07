<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillar[]|\Cake\Collection\CollectionInterface $pillars
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pillar'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pillars index large-9 medium-8 columns content">
    <h3><?= __('Pillars') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aplicacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pillars as $pillar): ?>
            <tr>
                <td><?= $this->Number->format($pillar->id) ?></td>
                <td><?= h($pillar->descricao) ?></td>
                <td><?= h($pillar->aplicacao) ?></td>
                <td><?= h($pillar->created) ?></td>
                <td><?= h($pillar->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pillar->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pillar->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pillar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pillar->id)]) ?>
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
