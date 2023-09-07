<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpointsfl[]|\Cake\Collection\CollectionInterface $entregasblockpointsfls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entregasblockpointsfl'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregasblockpoints'), ['controller' => 'Entregasblockpoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregasblockpoint'), ['controller' => 'Entregasblockpoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entregasblockpointsfls index large-9 medium-8 columns content">
    <h3><?= __('Entregasblockpointsfls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entregasblockpoint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregasblockpointsfls as $entregasblockpointsfl): ?>
            <tr>
                <td><?= $this->Number->format($entregasblockpointsfl->id) ?></td>
                <td><?= $entregasblockpointsfl->has('entregasblockpoint') ? $this->Html->link($entregasblockpointsfl->entregasblockpoint->id, ['controller' => 'Entregasblockpoints', 'action' => 'view', $entregasblockpointsfl->entregasblockpoint->id]) : '' ?></td>
                <td><?= h($entregasblockpointsfl->dataemissao) ?></td>
                <td><?= h($entregasblockpointsfl->descricao) ?></td>
                <td><?= h($entregasblockpointsfl->ativo) ?></td>
                <td><?= h($entregasblockpointsfl->created) ?></td>
                <td><?= h($entregasblockpointsfl->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entregasblockpointsfl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entregasblockpointsfl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entregasblockpointsfl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregasblockpointsfl->id)]) ?>
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
