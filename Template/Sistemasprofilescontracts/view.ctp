<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprofilescontract $sistemasprofilescontract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasprofilescontract'), ['action' => 'edit', $sistemasprofilescontract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasprofilescontract'), ['action' => 'delete', $sistemasprofilescontract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprofilescontract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasprofilescontracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasprofilescontract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasprofiles'), ['controller' => 'Sistemasprofiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasprofile'), ['controller' => 'Sistemasprofiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasprofilescontracts view large-9 medium-8 columns content">
    <h3><?= h($sistemasprofilescontract->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasprofilescontract->has('sistema') ? $this->Html->link($sistemasprofilescontract->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasprofilescontract->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasprofile') ?></th>
            <td><?= $sistemasprofilescontract->has('sistemasprofile') ? $this->Html->link($sistemasprofilescontract->sistemasprofile->descricao, ['controller' => 'Sistemasprofiles', 'action' => 'view', $sistemasprofilescontract->sistemasprofile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasprofilescontract->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasprofilescontract->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasprofilescontract->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasprofilescontract->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasprofilescontract->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
