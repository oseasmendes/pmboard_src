<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosproduto[]|\Cake\Collection\CollectionInterface $projetosprodutos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutos index large-9 medium-8 columns content">
    <h3><?= __('Produtos do Projeto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutos as $projetosproduto): ?>
            <tr>
                <td><?= $this->Number->format($projetosproduto->id) ?></td>
                <td><?= h($projetosproduto->produto) ?></td>
                <td><?= $projetosproduto->has('projeto') ? $this->Html->link($projetosproduto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosproduto->projeto->id]) : '' ?></td>
                <td><?= h($projetosproduto->created) ?></td>
                <td><?= h($projetosproduto->modified) ?></td>
                <td><?= h($projetosproduto->codenome) ?></td>
                <td><?= h($projetosproduto->referencia) ?></td>
                <td><?= $projetosproduto->has('statusfuncional') ? $this->Html->link($projetosproduto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosproduto->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosproduto->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosproduto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosproduto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosproduto->id)]) ?>
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
