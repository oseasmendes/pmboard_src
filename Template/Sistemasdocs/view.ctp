<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasdoc $sistemasdoc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasdoc'), ['action' => 'edit', $sistemasdoc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasdoc'), ['action' => 'delete', $sistemasdoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdoc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documentos'), ['controller' => 'Documentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Documento'), ['controller' => 'Documentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasdocs view large-9 medium-8 columns content">
    <h3><?= h($sistemasdoc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasdoc->has('sistema') ? $this->Html->link($sistemasdoc->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasdoc->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documento') ?></th>
            <td><?= $sistemasdoc->has('documento') ? $this->Html->link($sistemasdoc->documento->descricao, ['controller' => 'Documentos', 'action' => 'view', $sistemasdoc->documento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documentonome') ?></th>
            <td><?= h($sistemasdoc->documentonome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasdoc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criadoem') ?></th>
            <td><?= h($sistemasdoc->criadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atualizadoem') ?></th>
            <td><?= h($sistemasdoc->atualizadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasdoc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasdoc->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Documentourl') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasdoc->documentourl)); ?>
    </div>
</div>
