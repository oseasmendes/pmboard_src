<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlagente $esupportsetlagente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlagente'), ['action' => 'edit', $esupportsetlagente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlagente'), ['action' => 'delete', $esupportsetlagente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlagente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlagentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlagente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlagentes view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlagente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlagente->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlagente->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlagente->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $esupportsetlagente->has('consultore') ? $this->Html->link($esupportsetlagente->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $esupportsetlagente->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlagente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlagente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlagente->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlagente->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
