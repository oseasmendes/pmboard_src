<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosfinance[]|\Cake\Collection\CollectionInterface $projetosprodutosfinances
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfinance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosfinances index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosfinances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referenciaproposta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datapropostaelaborada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datapropostapublicada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalhoras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valortotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validadeproposta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosfinances as $projetosprodutosfinance): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosfinance->id) ?></td>
                <td><?= h($projetosprodutosfinance->referenciaproposta) ?></td>
                <td><?= h($projetosprodutosfinance->datapropostaelaborada) ?></td>
                <td><?= h($projetosprodutosfinance->datapropostapublicada) ?></td>
                <td><?= $projetosprodutosfinance->has('projetosproduto') ? $this->Html->link($projetosprodutosfinance->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosfinance->projetosproduto->id]) : '' ?></td>
                <td><?= $this->Number->format($projetosprodutosfinance->totalhoras) ?></td>
                <td><?= $this->Number->format($projetosprodutosfinance->valortotal) ?></td>
                <td><?= $this->Number->format($projetosprodutosfinance->validadeproposta) ?></td>
                <td><?= $projetosprodutosfinance->has('statusfuncional') ? $this->Html->link($projetosprodutosfinance->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosfinance->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosprodutosfinance->created) ?></td>
                <td><?= h($projetosprodutosfinance->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosfinance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosfinance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosfinance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfinance->id)]) ?>
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
