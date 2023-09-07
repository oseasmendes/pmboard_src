<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosoutofscope $projetosoutofscope
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosoutofscope'), ['action' => 'edit', $projetosoutofscope->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosoutofscope'), ['action' => 'delete', $projetosoutofscope->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosoutofscope->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosoutofscopes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosoutofscope'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosoutofscopes view large-9 medium-8 columns content">
    <h3><?= h($projetosoutofscope->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosoutofscope->has('projetosproduto') ? $this->Html->link($projetosoutofscope->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosoutofscope->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosoutofscope->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($projetosoutofscope->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosoutofscope->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($projetosoutofscope->statusfuncional_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetosoutofscope->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosoutofscope->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosoutofscope->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosoutofscope->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosoutofscope->detalhes)); ?>
    </div>
</div>
