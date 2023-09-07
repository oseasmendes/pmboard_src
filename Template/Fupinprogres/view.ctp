<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupinprogre $fupinprogre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fupinprogre'), ['action' => 'edit', $fupinprogre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fupinprogre'), ['action' => 'delete', $fupinprogre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupinprogre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fupinprogres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupinprogre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fupinprogres view large-9 medium-8 columns content">
    <h3><?= h($fupinprogre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupagenda') ?></th>
            <td><?= $fupinprogre->has('fupagenda') ? $this->Html->link($fupinprogre->fupagenda->id, ['controller' => 'Fupagendas', 'action' => 'view', $fupinprogre->fupagenda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($fupinprogre->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kanban') ?></th>
            <td><?= h($fupinprogre->kanban) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Esupportid') ?></th>
            <td><?= h($fupinprogre->esupportid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($fupinprogre->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($fupinprogre->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusdetalhado') ?></th>
            <td><?= h($fupinprogre->statusdetalhado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analista') ?></th>
            <td><?= h($fupinprogre->analista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($fupinprogre->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupinprogre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($fupinprogre->prio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastupdate') ?></th>
            <td><?= h($fupinprogre->lastupdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupinprogre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupinprogre->modified) ?></td>
        </tr>
    </table>
</div>
