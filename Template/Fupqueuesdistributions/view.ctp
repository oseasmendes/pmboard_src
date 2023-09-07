<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueuesdistribution $fupqueuesdistribution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fupqueuesdistribution'), ['action' => 'edit', $fupqueuesdistribution->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fupqueuesdistribution'), ['action' => 'delete', $fupqueuesdistribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueuesdistribution->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fupqueuesdistributions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupqueuesdistribution'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fupqueuesdistributions view large-9 medium-8 columns content">
    <h3><?= h($fupqueuesdistribution->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupqueue') ?></th>
            <td><?= $fupqueuesdistribution->has('fupqueue') ? $this->Html->link($fupqueuesdistribution->fupqueue->descricao, ['controller' => 'Fupqueues', 'action' => 'view', $fupqueuesdistribution->fupqueue->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $fupqueuesdistribution->has('participante') ? $this->Html->link($fupqueuesdistribution->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $fupqueuesdistribution->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupqueuesdistribution->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupqueuesdistribution->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupqueuesdistribution->modified) ?></td>
        </tr>
    </table>
</div>
