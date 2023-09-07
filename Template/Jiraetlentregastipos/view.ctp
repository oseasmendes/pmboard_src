<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlentregastipo $jiraetlentregastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jiraetlentregastipo'), ['action' => 'edit', $jiraetlentregastipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jiraetlentregastipo'), ['action' => 'delete', $jiraetlentregastipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlentregastipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jiraetlentregastipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jiraetlentregastipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jiraetlentregastipos view large-9 medium-8 columns content">
    <h3><?= h($jiraetlentregastipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($jiraetlentregastipo->Descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('JiraIssueType') ?></th>
            <td><?= h($jiraetlentregastipo->JiraIssueType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entregastipo') ?></th>
            <td><?= $jiraetlentregastipo->has('entregastipo') ? $this->Html->link($jiraetlentregastipo->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $jiraetlentregastipo->entregastipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jiraetlentregastipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jiraetlentregastipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jiraetlentregastipo->modified) ?></td>
        </tr>
    </table>
</div>
