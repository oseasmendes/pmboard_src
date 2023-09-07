<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosimg[]|\Cake\Collection\CollectionInterface $projetosprodutosimgs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosimg'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosimgs index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosimgs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginalid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagempath') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosimgs as $projetosprodutosimg): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosimg->id) ?></td>
                <td><?= $projetosprodutosimg->has('projetosproduto') ? $this->Html->link($projetosprodutosimg->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosimg->projetosproduto->id]) : '' ?></td>
                <td><?= h($projetosprodutosimg->referencia) ?></td>
                <td><?= h($projetosprodutosimg->descricao) ?></td>
                <td><?= h($projetosprodutosimg->imagemoriginal) ?></td>
                <td><?= h($projetosprodutosimg->url) ?></td>
                <td><?= $this->Number->format($projetosprodutosimg->imagemoriginalid) ?></td>
                <td><?= h($projetosprodutosimg->imagempath) ?></td>
                <td><?= h($projetosprodutosimg->created) ?></td>
                <td><?= h($projetosprodutosimg->modified) ?></td>
                <td><?= $this->Number->format($projetosprodutosimg->ordem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosimg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosimg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosimg->id)]) ?>
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
