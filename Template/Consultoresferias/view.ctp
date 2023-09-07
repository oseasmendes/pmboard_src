<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresferia $consultoresferia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoresferia'), ['action' => 'edit', $consultoresferia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoresferia'), ['action' => 'delete', $consultoresferia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresferia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresferias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresferia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoresferias view large-9 medium-8 columns content">
    <h3><?= h($consultoresferia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $consultoresferia->has('consultore') ? $this->Html->link($consultoresferia->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresferia->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($consultoresferia->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $consultoresferia->has('statusfuncional') ? $this->Html->link($consultoresferia->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $consultoresferia->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoresferia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $this->Number->format($consultoresferia->periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicio') ?></th>
            <td><?= h($consultoresferia->datainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafim') ?></th>
            <td><?= h($consultoresferia->datafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoresferia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoresferia->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Informadoem') ?></th>
            <td><?= h($consultoresferia->informadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planejamentode') ?></th>
            <td><?= h($consultoresferia->planejamentode) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($consultoresferia->observacao)); ?>
    </div>
</div>
