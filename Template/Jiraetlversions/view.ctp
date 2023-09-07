<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlversion $jiraetlversion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jiraetlversion'), ['action' => 'edit', $jiraetlversion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jiraetlversion'), ['action' => 'delete', $jiraetlversion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlversion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jiraetlversions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jiraetlversion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jiraetlversions view large-9 medium-8 columns content">
    <h3><?= h($jiraetlversion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= h($jiraetlversion->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetossprint') ?></th>
            <td><?= $jiraetlversion->has('projetossprint') ? $this->Html->link($jiraetlversion->projetossprint->id, ['controller' => 'Projetossprints', 'action' => 'view', $jiraetlversion->projetossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jiraetlversion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jiraetlversion->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jiraetlversion->modified) ?></td>
        </tr>
    </table>
</div>
