<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresausencia $consultoresausencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoresausencia'), ['action' => 'edit', $consultoresausencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoresausencia'), ['action' => 'delete', $consultoresausencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresausencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresausencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresausencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresausenciastipos'), ['controller' => 'Consultoresausenciastipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresausenciastipo'), ['controller' => 'Consultoresausenciastipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoresausencias view large-9 medium-8 columns content">
    <h3><?= h($consultoresausencia->id) ?></h3>
    <table class="table table-primary table-responsive-sm">  
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $consultoresausencia->has('consultore') ? $this->Html->link($consultoresausencia->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresausencia->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($consultoresausencia->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($consultoresausencia->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $consultoresausencia->has('statusfuncional') ? $this->Html->link($consultoresausencia->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $consultoresausencia->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultoresausenciastipo') ?></th>
            <td><?= $consultoresausencia->has('consultoresausenciastipo') ? $this->Html->link($consultoresausencia->consultoresausenciastipo->id, ['controller' => 'Consultoresausenciastipos', 'action' => 'view', $consultoresausencia->consultoresausenciastipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoresausencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $this->Number->format($consultoresausencia->periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicio') ?></th>
            <td><?= h($consultoresausencia->datainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafim') ?></th>
            <td><?= h($consultoresausencia->datafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoresausencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoresausencia->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Informadoem') ?></th>
            <td><?= h($consultoresausencia->informadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planejamentode') ?></th>
            <td><?= h($consultoresausencia->planejamentode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $consultoresausencia->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($consultoresausencia->observacao)); ?>
    </div>
</div>
