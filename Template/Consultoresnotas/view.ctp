<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresnota $consultoresnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoresnota'), ['action' => 'edit', $consultoresnota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoresnota'), ['action' => 'delete', $consultoresnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresnota->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresnotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresnota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoresnotas view large-9 medium-8 columns content">
    <h3><?= h($consultoresnota->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $consultoresnota->has('consultore') ? $this->Html->link($consultoresnota->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresnota->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocorrencia') ?></th>
            <td><?= $consultoresnota->has('ocorrencia') ? $this->Html->link($consultoresnota->ocorrencia->id, ['controller' => 'Ocorrencias', 'action' => 'view', $consultoresnota->ocorrencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocorrenciaresumo') ?></th>
            <td><?= h($consultoresnota->ocorrenciaresumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoresnota->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoresnota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoresnota->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($consultoresnota->historico)); ?>
    </div>
</div>
