<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreehspareto[]|\Cake\Collection\CollectionInterface $fivewthreehsparetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fivewthreehspareto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fivewthreehsparetos index large-9 medium-8 columns content">
    <h3><?= __('Fivewthreehsparetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fivewthreeh_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fivewthreehsparetos as $fivewthreehspareto): ?>
            <tr>
                <td><?= $this->Number->format($fivewthreehspareto->id) ?></td>
                <td><?= $fivewthreehspareto->has('fivewthreeh') ? $this->Html->link($fivewthreehspareto->fivewthreeh->id, ['controller' => 'Fivewthreehs', 'action' => 'view', $fivewthreehspareto->fivewthreeh->id]) : '' ?></td>
                <td><?= $fivewthreehspareto->has('pareto') ? $this->Html->link($fivewthreehspareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $fivewthreehspareto->pareto->id]) : '' ?></td>
                <td><?= h($fivewthreehspareto->descricao) ?></td>
                <td><?= h($fivewthreehspareto->created) ?></td>
                <td><?= h($fivewthreehspareto->modified) ?></td>
                <td><?= h($fivewthreehspareto->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fivewthreehspareto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fivewthreehspareto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fivewthreehspareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehspareto->id)]) ?>
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
