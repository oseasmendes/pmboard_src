<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbooksitem $logbooksitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logbooksitem'), ['action' => 'edit', $logbooksitem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logbooksitem'), ['action' => 'delete', $logbooksitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logbooksitem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logbooksitems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logbooksitem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Logbooks'), ['controller' => 'Logbooks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logbook'), ['controller' => 'Logbooks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logbooksitems view large-9 medium-8 columns content">
    <h3><?= h($logbooksitem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $logbooksitem->has('projeto') ? $this->Html->link($logbooksitem->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $logbooksitem->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $logbooksitem->has('consultore') ? $this->Html->link($logbooksitem->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $logbooksitem->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logbook') ?></th>
            <td><?= $logbooksitem->has('logbook') ? $this->Html->link($logbooksitem->logbook->id, ['controller' => 'Logbooks', 'action' => 'view', $logbooksitem->logbook->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($logbooksitem->hora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($logbooksitem->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notificarcontato') ?></th>
            <td><?= h($logbooksitem->notificarcontato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($logbooksitem->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logbooksitem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($logbooksitem->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logbooksitem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($logbooksitem->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notificaracao') ?></th>
            <td><?= $logbooksitem->notificaracao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($logbooksitem->historico)); ?>
    </div>
</div>
