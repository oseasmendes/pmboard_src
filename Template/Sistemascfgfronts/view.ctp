<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgfront $sistemascfgfront
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgfront'), ['action' => 'edit', $sistemascfgfront->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgfront'), ['action' => 'delete', $sistemascfgfront->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgfront->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgfronts view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgfront->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tecnologia') ?></th>
            <td><?= $sistemascfgfront->has('tecnologia') ? $this->Html->link($sistemascfgfront->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $sistemascfgfront->tecnologia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgfront->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= h($sistemascfgfront->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivoatualizacao') ?></th>
            <td><?= h($sistemascfgfront->motivoatualizacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgfront->has('sistema') ? $this->Html->link($sistemascfgfront->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgfront->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgfront->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percentual') ?></th>
            <td><?= $this->Number->format($sistemascfgfront->percentual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultimaatualizacao') ?></th>
            <td><?= h($sistemascfgfront->ultimaatualizacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgfront->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgfront->modified) ?></td>
        </tr>
    </table>
</div>
