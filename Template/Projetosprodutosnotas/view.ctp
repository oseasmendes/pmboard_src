<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosnota $projetosprodutosnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosnota'), ['action' => 'edit', $projetosprodutosnota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosnota'), ['action' => 'delete', $projetosprodutosnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosnota->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosnotas view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosnota->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Notatipo') ?></th>
            <td><?= $projetosprodutosnota->has('notatipo') ? $this->Html->link($projetosprodutosnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosprodutosnota->notatipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosnota->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosnota->has('projetosproduto') ? $this->Html->link($projetosprodutosnota->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosnota->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosnota->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosnota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosnota->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosnota->historico)); ?>
    </div>
</div>
