<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Smcplan $smcplan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Smcplan'), ['action' => 'edit', $smcplan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Smcplan'), ['action' => 'delete', $smcplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smcplan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Smcplans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Smcplan'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="smcplans view large-9 medium-8 columns content">
    <h3><?= h($smcplan->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($smcplan->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pmg') ?></th>
            <td><?= h($smcplan->pmg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($smcplan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($smcplan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($smcplan->modified) ?></td>
        </tr>
    </table>
</div>
