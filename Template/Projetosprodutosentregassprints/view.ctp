<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregassprint $projetosprodutosentregassprint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosentregassprint'), ['action' => 'edit', $projetosprodutosentregassprint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosentregassprint'), ['action' => 'delete', $projetosprodutosentregassprint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregassprint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregassprints'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregassprint'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['controller' => 'Projetosprodutossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['controller' => 'Projetosprodutossprints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosentregassprints view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosentregassprint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutossprint') ?></th>
            <td><?= $projetosprodutosentregassprint->has('projetosprodutossprint') ? $this->Html->link($projetosprodutosentregassprint->projetosprodutossprint->id, ['controller' => 'Projetosprodutossprints', 'action' => 'view', $projetosprodutosentregassprint->projetosprodutossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosentregassprint->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregassprint->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregassprint->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregassprint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentregassprint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentregassprint->modified) ?></td>
        </tr>
    </table>
</div>
