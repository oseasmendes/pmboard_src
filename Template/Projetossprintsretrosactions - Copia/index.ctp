<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretrosaction[]|\Cake\Collection\CollectionInterface $projetossprintsretrosactions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['controller' => 'Projetossprintsretrositems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['controller' => 'Projetossprintsretrositems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pillars'), ['controller' => 'Pillars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pillar'), ['controller' => 'Pillars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pillarsareas'), ['controller' => 'Pillarsareas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pillarsarea'), ['controller' => 'Pillarsareas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pillarsresponsabilities'), ['controller' => 'Pillarsresponsabilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pillarsresponsability'), ['controller' => 'Pillarsresponsabilities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsretrosactions index large-9 medium-8 columns content">
    <h3><?= __('Projetossprintsretrosactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprintsretrositem_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('propostopor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pillar_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pillarsarea_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pillarsresponsabilitie_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprintsretrosactions as $projetossprintsretrosaction): ?>
            <tr>
                <td><?= $this->Number->format($projetossprintsretrosaction->id) ?></td>
                <td><?= $projetossprintsretrosaction->has('projetossprintsretrositem') ? $this->Html->link($projetossprintsretrosaction->projetossprintsretrositem->descricao, ['controller' => 'Projetossprintsretrositems', 'action' => 'view', $projetossprintsretrosaction->projetossprintsretrositem->id]) : '' ?></td>
                <td><?= h($projetossprintsretrosaction->descricao) ?></td>
                <td><?= h($projetossprintsretrosaction->propostopor) ?></td>
                <td><?= $projetossprintsretrosaction->has('consultore') ? $this->Html->link($projetossprintsretrosaction->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetossprintsretrosaction->consultore->id]) : '' ?></td>
                <td><?= h($projetossprintsretrosaction->created) ?></td>
                <td><?= h($projetossprintsretrosaction->modified) ?></td>
                <td><?= $projetossprintsretrosaction->has('pillar') ? $this->Html->link($projetossprintsretrosaction->pillar->descricao, ['controller' => 'Pillars', 'action' => 'view', $projetossprintsretrosaction->pillar->id]) : '' ?></td>
                <td><?= $projetossprintsretrosaction->has('pillarsarea') ? $this->Html->link($projetossprintsretrosaction->pillarsarea->descricao, ['controller' => 'Pillarsareas', 'action' => 'view', $projetossprintsretrosaction->pillarsarea->id]) : '' ?></td>
                <td><?= $projetossprintsretrosaction->has('pillarsresponsability') ? $this->Html->link($projetossprintsretrosaction->pillarsresponsability->descricao, ['controller' => 'Pillarsresponsabilities', 'action' => 'view', $projetossprintsretrosaction->pillarsresponsability->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprintsretrosaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprintsretrosaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetossprintsretrosaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrosaction->id)]) ?>
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
