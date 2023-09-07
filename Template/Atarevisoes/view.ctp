<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atareviso $atareviso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atareviso'), ['action' => 'edit', $atareviso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atareviso'), ['action' => 'delete', $atareviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atareviso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atarevisoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atareviso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atarevisoes view large-9 medium-8 columns content">
    <h3><?= h($atareviso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $atareviso->has('ata') ? $this->Html->link($atareviso->ata->id, ['controller' => 'Atas', 'action' => 'view', $atareviso->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $atareviso->has('participante') ? $this->Html->link($atareviso->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $atareviso->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Revisao Status') ?></th>
            <td><?= h($atareviso->revisao_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atareviso->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atareviso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Revisao Data') ?></th>
            <td><?= h($atareviso->revisao_data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atareviso->created) ?></td>
        </tr>
    </table>
</div>
