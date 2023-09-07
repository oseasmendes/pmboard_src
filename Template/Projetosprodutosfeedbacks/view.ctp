<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosfeedback $projetosprodutosfeedback
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosfeedback'), ['action' => 'edit', $projetosprodutosfeedback->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosfeedback'), ['action' => 'delete', $projetosprodutosfeedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfeedback->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Feedbacktipos'), ['controller' => 'Feedbacktipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedbacktipo'), ['controller' => 'Feedbacktipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosfeedbacks view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosfeedback->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Feedbacktipo') ?></th>
            <td><?= $projetosprodutosfeedback->has('feedbacktipo') ? $this->Html->link($projetosprodutosfeedback->feedbacktipo->descricao, ['controller' => 'Feedbacktipos', 'action' => 'view', $projetosprodutosfeedback->feedbacktipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosfeedback->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosfeedback->has('projetosproduto') ? $this->Html->link($projetosprodutosfeedback->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosfeedback->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosfeedback->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosfeedback->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosfeedback->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosfeedback->historico)); ?>
    </div>
</div>
