<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasaloc $projetosprodutosentregasaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosentregasaloc'), ['action' => 'edit', $projetosprodutosentregasaloc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosentregasaloc'), ['action' => 'delete', $projetosprodutosentregasaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasaloc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasalocs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasaloc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosentregasalocs view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosentregasaloc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosentregasaloc->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosprodutosentregasaloc->has('consultore') ? $this->Html->link($projetosprodutosentregasaloc->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosentregasaloc->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosentregasaloc->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasaloc->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasaloc->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosentregasaloc->has('statusfuncional') ? $this->Html->link($projetosprodutosentregasaloc->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosentregasaloc->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregasaloc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentregasaloc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentregasaloc->modified) ?></td>
        </tr>
    </table>
</div>
