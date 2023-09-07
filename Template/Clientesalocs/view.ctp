<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientesaloc $clientesaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clientesaloc'), ['action' => 'edit', $clientesaloc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clientesaloc'), ['action' => 'delete', $clientesaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesaloc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientesalocs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clientesaloc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientesalocs view large-9 medium-8 columns content">
    <h3><?= h($clientesaloc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($clientesaloc->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codenome') ?></th>
            <td><?= h($clientesaloc->codenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $clientesaloc->has('cliente') ? $this->Html->link($clientesaloc->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $clientesaloc->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientesaloc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($clientesaloc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($clientesaloc->modified) ?></td>
        </tr>
    </table>
</div>
