<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregastipo $entregastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entregastipo'), ['action' => 'edit', $entregastipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entregastipo'), ['action' => 'delete', $entregastipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregastipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entregastipos view large-9 medium-8 columns content">
    <h3><?= h($entregastipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($entregastipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entregastipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entregastipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entregastipo->modified) ?></td>
        </tr>
    </table>
</div>
