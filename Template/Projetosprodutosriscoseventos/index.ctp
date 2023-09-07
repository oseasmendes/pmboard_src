<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosevento[]|\Cake\Collection\CollectionInterface $projetosprodutosriscoseventos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosevento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosriscoseventos index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosriscoseventos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosrisco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosriscoseventos as $projetosprodutosriscosevento): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosriscosevento->id) ?></td>
                <td><?= $projetosprodutosriscosevento->has('projetosprodutosrisco') ? $this->Html->link($projetosprodutosriscosevento->projetosprodutosrisco->detalhes, ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscosevento->projetosprodutosrisco->id]) : '' ?></td>
                <td><?= h($projetosprodutosriscosevento->data) ?></td>
                <td><?= h($projetosprodutosriscosevento->resumo) ?></td>
                <td><?= $projetosprodutosriscosevento->has('statusfuncional') ? $this->Html->link($projetosprodutosriscosevento->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosriscosevento->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosprodutosriscosevento->created) ?></td>
                <td><?= h($projetosprodutosriscosevento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosriscosevento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosriscosevento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosriscosevento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscosevento->id)]) ?>
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
