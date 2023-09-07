<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasusuariosprocesso $sistemasusuariosprocesso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasusuariosprocesso'), ['action' => 'edit', $sistemasusuariosprocesso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasusuariosprocesso'), ['action' => 'delete', $sistemasusuariosprocesso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuariosprocesso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasusuariosprocessos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasusuariosprocesso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasusuariosprocessos view large-9 medium-8 columns content">
    <h3><?= h($sistemasusuariosprocesso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasusuariosprocesso->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasusuario') ?></th>
            <td><?= $sistemasusuariosprocesso->has('sistemasusuario') ? $this->Html->link($sistemasusuariosprocesso->sistemasusuario->nome, ['controller' => 'Sistemasusuarios', 'action' => 'view', $sistemasusuariosprocesso->sistemasusuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Processo') ?></th>
            <td><?= $sistemasusuariosprocesso->has('processo') ? $this->Html->link($sistemasusuariosprocesso->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $sistemasusuariosprocesso->processo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasusuariosprocesso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasusuariosprocesso->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasusuariosprocesso->modified) ?></td>
        </tr>
    </table>
</div>
