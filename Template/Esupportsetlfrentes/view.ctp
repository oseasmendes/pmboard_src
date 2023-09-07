<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlfrente $esupportsetlfrente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlfrente'), ['action' => 'edit', $esupportsetlfrente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlfrente'), ['action' => 'delete', $esupportsetlfrente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlfrente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlfrentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlfrente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Frentes'), ['controller' => 'Frentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Frente'), ['controller' => 'Frentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlfrentes view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlfrente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlfrente->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlfrente->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlfrente->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frente') ?></th>
            <td><?= $esupportsetlfrente->has('frente') ? $this->Html->link($esupportsetlfrente->frente->descricao, ['controller' => 'Frentes', 'action' => 'view', $esupportsetlfrente->frente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlfrente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlfrente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlfrente->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlfrente->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
