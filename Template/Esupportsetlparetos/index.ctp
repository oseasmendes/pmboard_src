<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlpareto[]|\Cake\Collection\CollectionInterface $esupportsetlparetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlpareto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlparetos index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlparetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlparetos as $esupportsetlpareto): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlpareto->id) ?></td>
                <td><?= h($esupportsetlpareto->descricao) ?></td>
                <td><?= h($esupportsetlpareto->canal) ?></td>
                <td><?= h($esupportsetlpareto->referencia) ?></td>
                <td><?= $esupportsetlpareto->has('pareto') ? $this->Html->link($esupportsetlpareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $esupportsetlpareto->pareto->id]) : '' ?></td>
                <td><?= h($esupportsetlpareto->ativo) ?></td>
                <td><?= h($esupportsetlpareto->created) ?></td>
                <td><?= h($esupportsetlpareto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlpareto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlpareto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlpareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlpareto->id)]) ?>
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
