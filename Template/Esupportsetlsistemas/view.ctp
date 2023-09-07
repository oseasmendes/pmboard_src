<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlsistema $esupportsetlsistema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlsistema'), ['action' => 'edit', $esupportsetlsistema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlsistema'), ['action' => 'delete', $esupportsetlsistema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlsistema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlsistemas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlsistema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlsistemas view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlsistema->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlsistema->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlsistema->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlsistema->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $esupportsetlsistema->has('sistema') ? $this->Html->link($esupportsetlsistema->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $esupportsetlsistema->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasmodulo') ?></th>
            <td><?= $esupportsetlsistema->has('sistemasmodulo') ? $this->Html->link($esupportsetlsistema->sistemasmodulo->id, ['controller' => 'Sistemasmodulos', 'action' => 'view', $esupportsetlsistema->sistemasmodulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlsistema->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlsistema->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlsistema->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlsistema->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
