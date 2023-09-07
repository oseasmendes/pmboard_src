<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendasnote $agendasnote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agendasnote'), ['action' => 'edit', $agendasnote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agendasnote'), ['action' => 'delete', $agendasnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendasnote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agendasnotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendasnote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendaschannels'), ['controller' => 'Agendaschannels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendaschannel'), ['controller' => 'Agendaschannels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agendasnotes view large-9 medium-8 columns content">
    <h3><?= h($agendasnote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Agendaschannel') ?></th>
            <td><?= $agendasnote->has('agendaschannel') ? $this->Html->link($agendasnote->agendaschannel->description, ['controller' => 'Agendaschannels', 'action' => 'view', $agendasnote->agendaschannel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agenda') ?></th>
            <td><?= $agendasnote->has('agenda') ? $this->Html->link($agendasnote->agenda->etiquetaadicional, ['controller' => 'Agendas', 'action' => 'view', $agendasnote->agenda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timeinformed') ?></th>
            <td><?= h($agendasnote->timeinformed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($agendasnote->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $agendasnote->has('statusfuncional') ? $this->Html->link($agendasnote->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $agendasnote->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Keywords') ?></th>
            <td><?= h($agendasnote->keywords) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agendasnote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agendasnote->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agendasnote->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actionplan') ?></th>
            <td><?= $agendasnote->actionplan ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selection') ?></th>
            <td><?= $agendasnote->selection ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beshared') ?></th>
            <td><?= $agendasnote->beshared ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comments') ?></h4>
        <?= $this->Text->autoParagraph(h($agendasnote->comments)); ?>
    </div>
</div>
