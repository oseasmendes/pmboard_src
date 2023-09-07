<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosoutofscope[]|\Cake\Collection\CollectionInterface $projetosoutofscopes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosoutofscope'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosoutofscopes index large-9 medium-8 columns content">
    <h3><?= __('Projetosoutofscopes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfunctional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosoutofscopes as $projetosoutofscope): ?>
            <tr>
                <td><?= $this->Number->format($projetosoutofscope->id) ?></td>
                <td><?= $projetosoutofscope->has('projetosproduto') ? $this->Html->link($projetosoutofscope->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosoutofscope->projetosproduto->id]) : '' ?></td>
                <td><?= h($projetosoutofscope->descricao) ?></td>
                <td><?= h($projetosoutofscope->ativo) ?></td>
                <td><?= h($projetosoutofscope->dataemissao) ?></td>
                <td><?= h($projetosoutofscope->responsavel) ?></td>
                <td><?= $this->Number->format($projetosoutofscope->statusfunctional_id) ?></td>
                <td><?= h($projetosoutofscope->created) ?></td>
                <td><?= h($projetosoutofscope->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosoutofscope->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosoutofscope->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosoutofscope->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosoutofscope->id)]) ?>
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
