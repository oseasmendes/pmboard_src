<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueueslist $fupqueueslist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fupqueueslist'), ['action' => 'edit', $fupqueueslist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fupqueueslist'), ['action' => 'delete', $fupqueueslist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueueslist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fupqueueslists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupqueueslist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fupqueueslists view large-9 medium-8 columns content">
    <h3><?= h($fupqueueslist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupqueue') ?></th>
            <td><?= $fupqueueslist->has('fupqueue') ? $this->Html->link($fupqueueslist->fupqueue->descricao, ['controller' => 'Fupqueues', 'action' => 'view', $fupqueueslist->fupqueue->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lista') ?></th>
            <td><?= h($fupqueueslist->lista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupqueueslist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupqueueslist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupqueueslist->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Emaillist') ?></h4>
        <?= $this->Text->autoParagraph(h($fupqueueslist->emaillist)); ?>
    </div>
</div>
