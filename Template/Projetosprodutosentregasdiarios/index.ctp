<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasdiario[]|\Cake\Collection\CollectionInterface $projetosprodutosentregasdiarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasdiario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregasdiarios index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosentregasdiarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fivewthreeh_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosentregasdiarios as $projetosprodutosentregasdiario): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosentregasdiario->id) ?></td>
                <td><?= $projetosprodutosentregasdiario->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasdiario->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasdiario->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= $projetosprodutosentregasdiario->has('consultore') ? $this->Html->link($projetosprodutosentregasdiario->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosentregasdiario->consultore->id]) : '' ?></td>
                <td><?= h($projetosprodutosentregasdiario->resumo) ?></td>
                <td><?= $projetosprodutosentregasdiario->has('fivewthreeh') ? $this->Html->link($projetosprodutosentregasdiario->fivewthreeh->description, ['controller' => 'Fivewthreehs', 'action' => 'view', $projetosprodutosentregasdiario->fivewthreeh->id]) : '' ?></td>
                <td><?= $projetosprodutosentregasdiario->has('statusfuncional') ? $this->Html->link($projetosprodutosentregasdiario->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosentregasdiario->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosprodutosentregasdiario->created) ?></td>
                <td><?= h($projetosprodutosentregasdiario->modified) ?></td>
                <td><?= h($projetosprodutosentregasdiario->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosentregasdiario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosentregasdiario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosentregasdiario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasdiario->id)]) ?>
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
