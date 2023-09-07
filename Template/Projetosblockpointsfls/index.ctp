<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosblockpointsfl[]|\Cake\Collection\CollectionInterface $projetosblockpointsfls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosblockpointsfl'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosblockpoints'), ['controller' => 'Projetosblockpoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosblockpoint'), ['controller' => 'Projetosblockpoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosblockpointsfls index large-9 medium-8 columns content">
    <h3><?= __('Projetosblockpointsfls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosblockpoint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosblockpointsfls as $projetosblockpointsfl): ?>
            <tr>
                <td><?= $this->Number->format($projetosblockpointsfl->id) ?></td>
                <td><?= $projetosblockpointsfl->has('projetosblockpoint') ? $this->Html->link($projetosblockpointsfl->projetosblockpoint->descricao, ['controller' => 'Projetosblockpoints', 'action' => 'view', $projetosblockpointsfl->projetosblockpoint->id]) : '' ?></td>
                <td><?= h($projetosblockpointsfl->dataemissao) ?></td>
                <td><?= h($projetosblockpointsfl->descricao) ?></td>
                <td><?= h($projetosblockpointsfl->ativo) ?></td>
                <td><?= h($projetosblockpointsfl->created) ?></td>
                <td><?= h($projetosblockpointsfl->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosblockpointsfl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosblockpointsfl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosblockpointsfl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosblockpointsfl->id)]) ?>
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
