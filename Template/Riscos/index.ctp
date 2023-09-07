<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Risco[]|\Cake\Collection\CollectionInterface $riscos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Riscoscategorias'), ['controller' => 'Riscoscategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Riscoscategoria'), ['controller' => 'Riscoscategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riscos index large-9 medium-8 columns content">
    <h3><?= __('Riscos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('riscoscategoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riscos as $risco): ?>
            <tr>
                <td><?= $this->Number->format($risco->id) ?></td>
                <td><?= $risco->has('riscoscategoria') ? $this->Html->link($risco->riscoscategoria->descricao, ['controller' => 'Riscoscategorias', 'action' => 'view', $risco->riscoscategoria->id]) : '' ?></td>
                <td><?= h($risco->descricao) ?></td>
                <td><?= h($risco->created) ?></td>
                <td><?= h($risco->modified) ?></td>
                <td><?= h($risco->hora) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $risco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $risco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $risco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $risco->id)]) ?>
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
