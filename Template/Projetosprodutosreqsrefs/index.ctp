<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreqsref[]|\Cake\Collection\CollectionInterface $projetosprodutosreqsrefs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosreqsref'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosreqs'), ['controller' => 'Projetosprodutosreqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosreq'), ['controller' => 'Projetosprodutosreqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosreqsrefs index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosreqsrefs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosreq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosreqsrefs as $projetosprodutosreqsref): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosreqsref->id) ?></td>
                <td><?= h($projetosprodutosreqsref->referencia) ?></td>
                <td><?= h($projetosprodutosreqsref->description) ?></td>
                <td><?= $projetosprodutosreqsref->has('projetosprodutosreq') ? $this->Html->link($projetosprodutosreqsref->projetosprodutosreq->id, ['controller' => 'Projetosprodutosreqs', 'action' => 'view', $projetosprodutosreqsref->projetosprodutosreq->id]) : '' ?></td>
                <td><?= $projetosprodutosreqsref->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosreqsref->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosreqsref->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($projetosprodutosreqsref->cancelled) ?></td>
                <td><?= h($projetosprodutosreqsref->created) ?></td>
                <td><?= h($projetosprodutosreqsref->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosreqsref->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosreqsref->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosreqsref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosreqsref->id)]) ?>
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
