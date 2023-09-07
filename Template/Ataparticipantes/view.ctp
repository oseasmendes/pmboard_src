<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataparticipante $ataparticipante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ataparticipante'), ['action' => 'edit', $ataparticipante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ataparticipante'), ['action' => 'delete', $ataparticipante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataparticipante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ataparticipantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ataparticipante'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ataparticipantes view large-9 medium-8 columns content">
    <h3><?= h($ataparticipante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $ataparticipante->has('ata') ? $this->Html->link($ataparticipante->ata->id, ['controller' => 'Atas', 'action' => 'view', $ataparticipante->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $ataparticipante->has('participante') ? $this->Html->link($ataparticipante->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ataparticipante->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ataparticipante->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ataparticipante->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ataparticipante->modified) ?></td>
        </tr>
    </table>
</div>
