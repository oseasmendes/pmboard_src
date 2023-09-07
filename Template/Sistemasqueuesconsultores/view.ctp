<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasqueuesconsultore $sistemasqueuesconsultore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasqueuesconsultore'), ['action' => 'edit', $sistemasqueuesconsultore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasqueuesconsultore'), ['action' => 'delete', $sistemasqueuesconsultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasqueuesconsultore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasqueuesconsultores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasqueuesconsultore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasqueues'), ['controller' => 'Sistemasqueues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasqueue'), ['controller' => 'Sistemasqueues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasqueuesconsultores view large-9 medium-8 columns content">
    <h3><?= h($sistemasqueuesconsultore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Desricao') ?></th>
            <td><?= h($sistemasqueuesconsultore->desricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasqueue') ?></th>
            <td><?= $sistemasqueuesconsultore->has('sistemasqueue') ? $this->Html->link($sistemasqueuesconsultore->sistemasqueue->descricao, ['controller' => 'Sistemasqueues', 'action' => 'view', $sistemasqueuesconsultore->sistemasqueue->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $sistemasqueuesconsultore->has('consultore') ? $this->Html->link($sistemasqueuesconsultore->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $sistemasqueuesconsultore->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasqueuesconsultore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasqueuesconsultore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasqueuesconsultore->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasqueuesconsultore->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
