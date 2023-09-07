<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreqsref $projetosprodutosreqsref
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosreqsref'), ['action' => 'edit', $projetosprodutosreqsref->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosreqsref'), ['action' => 'delete', $projetosprodutosreqsref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosreqsref->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosreqsrefs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosreqsref'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosreqs'), ['controller' => 'Projetosprodutosreqs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosreq'), ['controller' => 'Projetosprodutosreqs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosreqsrefs view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosreqsref->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosprodutosreqsref->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($projetosprodutosreqsref->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosreq') ?></th>
            <td><?= $projetosprodutosreqsref->has('projetosprodutosreq') ? $this->Html->link($projetosprodutosreqsref->projetosprodutosreq->id, ['controller' => 'Projetosprodutosreqs', 'action' => 'view', $projetosprodutosreqsref->projetosprodutosreq->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosreqsref->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosreqsref->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosreqsref->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosreqsref->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosreqsref->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosreqsref->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelled') ?></th>
            <td><?= $projetosprodutosreqsref->cancelled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
