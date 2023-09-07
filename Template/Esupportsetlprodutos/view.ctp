<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlproduto $esupportsetlproduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlproduto'), ['action' => 'edit', $esupportsetlproduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlproduto'), ['action' => 'delete', $esupportsetlproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlproduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlprodutos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlproduto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlprodutos view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlproduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlproduto->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlproduto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlproduto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $esupportsetlproduto->has('projeto') ? $this->Html->link($esupportsetlproduto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $esupportsetlproduto->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $esupportsetlproduto->has('projetosproduto') ? $this->Html->link($esupportsetlproduto->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $esupportsetlproduto->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlproduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlproduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlproduto->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlproduto->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
