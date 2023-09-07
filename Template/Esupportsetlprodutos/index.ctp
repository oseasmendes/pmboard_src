<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlproduto[]|\Cake\Collection\CollectionInterface $esupportsetlprodutos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlproduto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlprodutos index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlprodutos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlprodutos as $esupportsetlproduto): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlproduto->id) ?></td>
                <td><?= h($esupportsetlproduto->canal) ?></td>
                <td><?= h($esupportsetlproduto->descricao) ?></td>
                <td><?= h($esupportsetlproduto->referencia) ?></td>
                <td><?= $esupportsetlproduto->has('projeto') ? $this->Html->link($esupportsetlproduto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $esupportsetlproduto->projeto->id]) : '' ?></td>
                <td><?= $esupportsetlproduto->has('projetosproduto') ? $this->Html->link($esupportsetlproduto->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $esupportsetlproduto->projetosproduto->id]) : '' ?></td>
                <td><?= h($esupportsetlproduto->ativo) ?></td>
                <td><?= h($esupportsetlproduto->created) ?></td>
                <td><?= h($esupportsetlproduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlproduto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlproduto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlproduto->id)]) ?>
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
