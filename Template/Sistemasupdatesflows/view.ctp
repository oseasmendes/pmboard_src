<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdatesflow $sistemasupdatesflow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasupdatesflow'), ['action' => 'edit', $sistemasupdatesflow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasupdatesflow'), ['action' => 'delete', $sistemasupdatesflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasupdatesflow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasupdatesflows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasupdatesflow'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasupdates'), ['controller' => 'Sistemasupdates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasupdate'), ['controller' => 'Sistemasupdates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ambientes'), ['controller' => 'Ambientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ambiente'), ['controller' => 'Ambientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasupdatesflows view large-9 medium-8 columns content">
    <h3><?= h($sistemasupdatesflow->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistemasupdate') ?></th>
            <td><?= $sistemasupdatesflow->has('sistemasupdate') ? $this->Html->link($sistemasupdatesflow->sistemasupdate->id, ['controller' => 'Sistemasupdates', 'action' => 'view', $sistemasupdatesflow->sistemasupdate->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $sistemasupdatesflow->has('motivo') ? $this->Html->link($sistemasupdatesflow->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $sistemasupdatesflow->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ambiente') ?></th>
            <td><?= $sistemasupdatesflow->has('ambiente') ? $this->Html->link($sistemasupdatesflow->ambiente->descricao, ['controller' => 'Ambientes', 'action' => 'view', $sistemasupdatesflow->ambiente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Who') ?></th>
            <td><?= h($sistemasupdatesflow->who) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forwho') ?></th>
            <td><?= h($sistemasupdatesflow->forwho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasupdatesflow->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $sistemasupdatesflow->has('statusfuncional') ? $this->Html->link($sistemasupdatesflow->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $sistemasupdatesflow->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasupdatesflow->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($sistemasupdatesflow->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevistaretorno') ?></th>
            <td><?= h($sistemasupdatesflow->dataprevistaretorno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevistarelizacao') ?></th>
            <td><?= h($sistemasupdatesflow->dataprevistarelizacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datarealizadaretorno') ?></th>
            <td><?= h($sistemasupdatesflow->datarealizadaretorno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datarealizadaoficial') ?></th>
            <td><?= h($sistemasupdatesflow->datarealizadaoficial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasupdatesflow->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasupdatesflow->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasupdatesflow->historico)); ?>
    </div>
</div>
