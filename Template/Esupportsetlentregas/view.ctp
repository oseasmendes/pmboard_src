<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlentrega $esupportsetlentrega
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlentrega'), ['action' => 'edit', $esupportsetlentrega->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlentrega'), ['action' => 'delete', $esupportsetlentrega->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlentrega->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlentregas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlentrega'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlentregas view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlentrega->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlentrega->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlentrega->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlentrega->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entregastipo') ?></th>
            <td><?= $esupportsetlentrega->has('entregastipo') ? $this->Html->link($esupportsetlentrega->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $esupportsetlentrega->entregastipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlentrega->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlentrega->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlentrega->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlentrega->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
