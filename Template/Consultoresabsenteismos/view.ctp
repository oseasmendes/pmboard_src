<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresabsenteismo $consultoresabsenteismo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoresabsenteismo'), ['action' => 'edit', $consultoresabsenteismo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoresabsenteismo'), ['action' => 'delete', $consultoresabsenteismo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresabsenteismo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresabsenteismos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresabsenteismo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoresabsenteismos view large-9 medium-8 columns content">
    <h3><?= h($consultoresabsenteismo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $consultoresabsenteismo->has('consultore') ? $this->Html->link($consultoresabsenteismo->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresabsenteismo->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($consultoresabsenteismo->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoresabsenteismo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicio') ?></th>
            <td><?= h($consultoresabsenteismo->datainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafim') ?></th>
            <td><?= h($consultoresabsenteismo->datafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Informadoem') ?></th>
            <td><?= h($consultoresabsenteismo->informadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoresabsenteismo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoresabsenteismo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($consultoresabsenteismo->observacao)); ?>
    </div>
</div>
