<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasmodulo $sistemasmodulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasmodulo'), ['action' => 'edit', $sistemasmodulo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasmodulo'), ['action' => 'delete', $sistemasmodulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasmodulo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasmodulos view large-9 medium-8 columns content">
    <h3><?= h($sistemasmodulo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasmodulo->has('sistema') ? $this->Html->link($sistemasmodulo->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasmodulo->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($sistemasmodulo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= h($sistemasmodulo->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasmodulo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $sistemasmodulo->has('statusfuncional') ? $this->Html->link($sistemasmodulo->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $sistemasmodulo->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasmodulo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasmodulo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasmodulo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasmodulo->historico)); ?>
    </div>
</div>
