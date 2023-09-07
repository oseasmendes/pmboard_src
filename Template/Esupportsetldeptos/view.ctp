<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetldepto $esupportsetldepto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetldepto'), ['action' => 'edit', $esupportsetldepto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetldepto'), ['action' => 'delete', $esupportsetldepto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetldepto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetldeptos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetldepto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetldeptos view large-9 medium-8 columns content">
    <h3><?= h($esupportsetldepto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetldepto->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetldepto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetldepto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $esupportsetldepto->has('departamento') ? $this->Html->link($esupportsetldepto->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $esupportsetldepto->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetldepto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetldepto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetldepto->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetldepto->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
