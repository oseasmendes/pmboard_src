<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgrelacionado $sistemascfgrelacionado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgrelacionado'), ['action' => 'edit', $sistemascfgrelacionado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgrelacionado'), ['action' => 'delete', $sistemascfgrelacionado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgrelacionado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgrelacionados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgrelacionado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgrelacionados view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgrelacionado->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgrelacionado->has('sistema') ? $this->Html->link($sistemascfgrelacionado->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgrelacionado->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgrelacionado->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= h($sistemascfgrelacionado->branch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgrelacionado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema Id') ?></th>
            <td><?= $this->Number->format($sistemascfgrelacionado->sistema_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ambiente Id') ?></th>
            <td><?= $this->Number->format($sistemascfgrelacionado->ambiente_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgrelacionado->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgrelacionado->modified) ?></td>
        </tr>
    </table>
</div>
