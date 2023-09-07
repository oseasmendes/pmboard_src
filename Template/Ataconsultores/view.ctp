<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataconsultore $ataconsultore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ataconsultore'), ['action' => 'edit', $ataconsultore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ataconsultore'), ['action' => 'delete', $ataconsultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataconsultore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ataconsultores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ataconsultore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ataconsultores view large-9 medium-8 columns content">
    <h3><?= h($ataconsultore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $ataconsultore->has('ata') ? $this->Html->link($ataconsultore->ata->resumogeral, ['controller' => 'Atas', 'action' => 'view', $ataconsultore->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $ataconsultore->has('consultore') ? $this->Html->link($ataconsultore->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $ataconsultore->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ataconsultore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ataconsultore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ataconsultore->modified) ?></td>
        </tr>
    </table>
</div>
