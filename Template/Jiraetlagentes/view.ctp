<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlagente $jiraetlagente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jiraetlagente'), ['action' => 'edit', $jiraetlagente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jiraetlagente'), ['action' => 'delete', $jiraetlagente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlagente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jiraetlagentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jiraetlagente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jiraetlagentes view large-9 medium-8 columns content">
    <h3><?= h($jiraetlagente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($jiraetlagente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $jiraetlagente->has('consultore') ? $this->Html->link($jiraetlagente->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $jiraetlagente->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jiraetlagente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jiraetlagente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jiraetlagente->modified) ?></td>
        </tr>
    </table>
</div>
