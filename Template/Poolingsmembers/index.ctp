<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poolingsmember[]|\Cake\Collection\CollectionInterface $poolingsmembers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Poolingsmember'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poolings'), ['controller' => 'Poolings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pooling'), ['controller' => 'Poolings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="poolingsmembers index large-9 medium-8 columns content">
    <h3><?= __('Team Pooling') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pooling_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($poolingsmembers as $poolingsmember): ?>
            <tr>
                <td><?= $this->Number->format($poolingsmember->id) ?></td>
                <td><?= $poolingsmember->has('consultore') ? $this->Html->link($poolingsmember->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $poolingsmember->consultore->id]) : '' ?></td>
                <td><?= $poolingsmember->has('pooling') ? $this->Html->link($poolingsmember->pooling->descricao, ['controller' => 'Poolings', 'action' => 'view', $poolingsmember->pooling->id]) : '' ?></td>
                <td><?= h($poolingsmember->descricao) ?></td>
                <td><?= h($poolingsmember->created) ?></td>
                <td><?= h($poolingsmember->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $poolingsmember->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $poolingsmember->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $poolingsmember->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poolingsmember->id)]) ?>
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
