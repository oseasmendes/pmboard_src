<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasnota $sistemasnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasnota'), ['action' => 'edit', $sistemasnota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasnota'), ['action' => 'delete', $sistemasnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasnota->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasnotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasnota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasnotas view large-9 medium-8 columns content">
    <h3><?= h($sistemasnota->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasnota->has('sistema') ? $this->Html->link($sistemasnota->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasnota->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notatipo') ?></th>
            <td><?= $sistemasnota->has('notatipo') ? $this->Html->link($sistemasnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $sistemasnota->notatipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasnota->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasnota->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasnota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasnota->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasnota->historico)); ?>
    </div>
</div>
