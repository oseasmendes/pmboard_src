<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasbriefing $sistemasbriefing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasbriefing'), ['action' => 'edit', $sistemasbriefing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasbriefing'), ['action' => 'delete', $sistemasbriefing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasbriefing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasbriefings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasbriefing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Smcplans'), ['controller' => 'Smcplans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Smcplan'), ['controller' => 'Smcplans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasbriefings view large-9 medium-8 columns content">
    <h3><?= h($sistemasbriefing->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasbriefing->has('sistema') ? $this->Html->link($sistemasbriefing->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasbriefing->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $sistemasbriefing->has('departamento') ? $this->Html->link($sistemasbriefing->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasbriefing->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smcplan') ?></th>
            <td><?= $sistemasbriefing->has('smcplan') ? $this->Html->link($sistemasbriefing->smcplan->descricao, ['controller' => 'Smcplans', 'action' => 'view', $sistemasbriefing->smcplan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasbriefing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataregistro') ?></th>
            <td><?= h($sistemasbriefing->dataregistro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasbriefing->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasbriefing->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objetivo') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasbriefing->objetivo)); ?>
    </div>
</div>
