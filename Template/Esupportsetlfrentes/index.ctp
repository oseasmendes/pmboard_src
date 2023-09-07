<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlfrente[]|\Cake\Collection\CollectionInterface $esupportsetlfrentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlfrente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frentes'), ['controller' => 'Frentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Frente'), ['controller' => 'Frentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlfrentes index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlfrentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlfrentes as $esupportsetlfrente): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlfrente->id) ?></td>
                <td><?= h($esupportsetlfrente->canal) ?></td>
                <td><?= h($esupportsetlfrente->descricao) ?></td>
                <td><?= h($esupportsetlfrente->referencia) ?></td>
                <td><?= $esupportsetlfrente->has('frente') ? $this->Html->link($esupportsetlfrente->frente->descricao, ['controller' => 'Frentes', 'action' => 'view', $esupportsetlfrente->frente->id]) : '' ?></td>
                <td><?= h($esupportsetlfrente->ativo) ?></td>
                <td><?= h($esupportsetlfrente->created) ?></td>
                <td><?= h($esupportsetlfrente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlfrente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlfrente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlfrente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlfrente->id)]) ?>
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
