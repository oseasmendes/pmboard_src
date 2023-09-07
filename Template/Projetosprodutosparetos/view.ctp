<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutospareto $projetosprodutospareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutospareto'), ['action' => 'edit', $projetosprodutospareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutospareto'), ['action' => 'delete', $projetosprodutospareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutospareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosparetos view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutospareto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutospareto->has('projetosproduto') ? $this->Html->link($projetosprodutospareto->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutospareto->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetosprodutospareto->has('pareto') ? $this->Html->link($projetosprodutospareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetosprodutospareto->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutospareto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutospareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutospareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutospareto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutospareto->historico)); ?>
    </div>
</div>
