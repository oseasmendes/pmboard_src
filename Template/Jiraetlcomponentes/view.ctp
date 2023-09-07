<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlcomponente $jiraetlcomponente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jiraetlcomponente'), ['action' => 'edit', $jiraetlcomponente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jiraetlcomponente'), ['action' => 'delete', $jiraetlcomponente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlcomponente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jiraetlcomponentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jiraetlcomponente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jiraetlcomponentes view large-9 medium-8 columns content">
    <h3><?= h($jiraetlcomponente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Componente') ?></th>
            <td><?= h($jiraetlcomponente->componente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $jiraetlcomponente->has('projetosproduto') ? $this->Html->link($jiraetlcomponente->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $jiraetlcomponente->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jiraetlcomponente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($jiraetlcomponente->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jiraetlcomponente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jiraetlcomponente->modified) ?></td>
        </tr>
    </table>
</div>
