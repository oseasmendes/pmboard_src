<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillarsresponsability $pillarsresponsability
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pillarsresponsability'), ['action' => 'edit', $pillarsresponsability->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pillarsresponsability'), ['action' => 'delete', $pillarsresponsability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pillarsresponsability->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pillarsresponsabilities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pillarsresponsability'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pillarsresponsabilities view large-9 medium-8 columns content">
    <h3><?= h($pillarsresponsability->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($pillarsresponsability->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pillarsresponsability->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pillarsresponsability->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pillarsresponsability->modified) ?></td>
        </tr>
    </table>
</div>
