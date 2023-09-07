<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregassprint[]|\Cake\Collection\CollectionInterface $projetosprodutosentregassprints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregassprint'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['controller' => 'Projetosprodutossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['controller' => 'Projetosprodutossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregassprints index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosentregassprints') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutossprint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosentregassprints as $projetosprodutosentregassprint): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosentregassprint->id) ?></td>
                <td><?= $projetosprodutosentregassprint->has('projetosprodutossprint') ? $this->Html->link($projetosprodutosentregassprint->projetosprodutossprint->id, ['controller' => 'Projetosprodutossprints', 'action' => 'view', $projetosprodutosentregassprint->projetosprodutossprint->id]) : '' ?></td>
                <td><?= $projetosprodutosentregassprint->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregassprint->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregassprint->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($projetosprodutosentregassprint->created) ?></td>
                <td><?= h($projetosprodutosentregassprint->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosentregassprint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosentregassprint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosentregassprint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregassprint->id)]) ?>
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
