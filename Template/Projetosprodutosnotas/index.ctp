<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosnota[]|\Cake\Collection\CollectionInterface $projetosprodutosnotas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosnotas index large-9 medium-8 columns content">
    <h3 font-family: 'Anton', sans-serif>Produtos - News </h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notatipo_id','Tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao','Nota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id','Produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosnotas as $projetosprodutosnota): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosnota->id) ?></td>
                <td><?= $projetosprodutosnota->has('notatipo') ? $this->Html->link($projetosprodutosnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosprodutosnota->notatipo->id]) : '' ?></td>
                <td><?= h($projetosprodutosnota->descricao) ?></td>
                <td><?= $projetosprodutosnota->has('projetosproduto') ? $this->Html->link($projetosprodutosnota->projetosproduto->codenome, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosnota->projetosproduto->id]) : '' ?></td>
                <td><?= h($projetosprodutosnota->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('VIE'), ['action' => 'view', $projetosprodutosnota->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('EDI'), ['action' => 'edit', $projetosprodutosnota->id],['class'=>'btn btn-success btn-sm']) ?>
                   <?= $this->Form->postLink(__('DEL'), ['action' => 'delete', $projetosprodutosnota->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosnota->id)]) ?>
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
