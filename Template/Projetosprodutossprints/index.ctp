<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutossprint[]|\Cake\Collection\CollectionInterface $projetosprodutossprints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sprinttipos'), ['controller' => 'Sprinttipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sprinttipo'), ['controller' => 'Sprinttipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregassprints'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregassprint'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutossprints index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutossprints') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sprinttipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutossprints as $projetosprodutossprint): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutossprint->id) ?></td>
                <td><?= $projetosprodutossprint->has('projetosproduto') ? $this->Html->link($projetosprodutossprint->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutossprint->projetosproduto->id]) : '' ?></td>
                <td><?= h($projetosprodutossprint->descricao) ?></td>
                <td><?= h($projetosprodutossprint->datainicio) ?></td>
                <td><?= h($projetosprodutossprint->datafim) ?></td>
                <td><?= h($projetosprodutossprint->created) ?></td>
                <td><?= h($projetosprodutossprint->modified) ?></td>
                <td><?= $projetosprodutossprint->has('sprinttipo') ? $this->Html->link($projetosprodutossprint->sprinttipo->id, ['controller' => 'Sprinttipos', 'action' => 'view', $projetosprodutossprint->sprinttipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutossprint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutossprint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutossprint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutossprint->id)]) ?>
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
