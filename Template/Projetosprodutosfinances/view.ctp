<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosfinance $projetosprodutosfinance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosfinance'), ['action' => 'edit', $projetosprodutosfinance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosfinance'), ['action' => 'delete', $projetosprodutosfinance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfinance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosfinances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosfinance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosfinances view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosfinance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Referenciaproposta') ?></th>
            <td><?= h($projetosprodutosfinance->referenciaproposta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosfinance->has('projetosproduto') ? $this->Html->link($projetosprodutosfinance->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosfinance->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosfinance->has('statusfuncional') ? $this->Html->link($projetosprodutosfinance->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosfinance->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosfinance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Totalhoras') ?></th>
            <td><?= $this->Number->format($projetosprodutosfinance->totalhoras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valortotal') ?></th>
            <td><?= $this->Number->format($projetosprodutosfinance->valortotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validadeproposta') ?></th>
            <td><?= $this->Number->format($projetosprodutosfinance->validadeproposta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datapropostaelaborada') ?></th>
            <td><?= h($projetosprodutosfinance->datapropostaelaborada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datapropostapublicada') ?></th>
            <td><?= h($projetosprodutosfinance->datapropostapublicada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosfinance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosfinance->modified) ?></td>
        </tr>
    </table>
</div>
