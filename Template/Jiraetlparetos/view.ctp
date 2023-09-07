<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlpareto $jiraetlpareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jiraetlpareto'), ['action' => 'edit', $jiraetlpareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jiraetlpareto'), ['action' => 'delete', $jiraetlpareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlpareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jiraetlparetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jiraetlpareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jiraetlparetos view large-9 medium-8 columns content">
    <h3><?= h($jiraetlpareto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($jiraetlpareto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jirastatus') ?></th>
            <td><?= h($jiraetlpareto->jirastatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $jiraetlpareto->has('pareto') ? $this->Html->link($jiraetlpareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $jiraetlpareto->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jiraetlpareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jiraetlpareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jiraetlpareto->modified) ?></td>
        </tr>
    </table>
</div>
