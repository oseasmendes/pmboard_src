<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poolingsmember $poolingsmember
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Poolingsmember'), ['action' => 'edit', $poolingsmember->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poolingsmember'), ['action' => 'delete', $poolingsmember->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poolingsmember->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poolingsmembers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poolingsmember'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poolings'), ['controller' => 'Poolings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pooling'), ['controller' => 'Poolings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="poolingsmembers view large-9 medium-8 columns content">
    <h3><?= h($poolingsmember->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $poolingsmember->has('consultore') ? $this->Html->link($poolingsmember->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $poolingsmember->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pooling') ?></th>
            <td><?= $poolingsmember->has('pooling') ? $this->Html->link($poolingsmember->pooling->id, ['controller' => 'Poolings', 'action' => 'view', $poolingsmember->pooling->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($poolingsmember->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($poolingsmember->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($poolingsmember->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($poolingsmember->modified) ?></td>
        </tr>
    </table>
</div>
