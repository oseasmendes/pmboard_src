<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlbus $esupportsetlbus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlbus'), ['action' => 'edit', $esupportsetlbus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlbus'), ['action' => 'delete', $esupportsetlbus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlbus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlbus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlbus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresasunidades'), ['controller' => 'Empresasunidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresasunidade'), ['controller' => 'Empresasunidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlbus view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlbus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlbus->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlbus->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlbus->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresasunidade') ?></th>
            <td><?= $esupportsetlbus->has('empresasunidade') ? $this->Html->link($esupportsetlbus->empresasunidade->descricao, ['controller' => 'Empresasunidades', 'action' => 'view', $esupportsetlbus->empresasunidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlbus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlbus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlbus->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlbus->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
