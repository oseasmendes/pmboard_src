<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendasnote[]|\Cake\Collection\CollectionInterface $agendasnotes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agendasnote'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaschannels'), ['controller' => 'Agendaschannels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaschannel'), ['controller' => 'Agendaschannels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendasnotes index large-9 medium-8 columns content">
    <h3><?= __('Agendasnotes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agendaschannel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agenda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timeinformed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('keywords') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actionplan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('selection') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beshared') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agendasnotes as $agendasnote): ?>
            <tr>
                <td><?= $this->Number->format($agendasnote->id) ?></td>
                <td><?= $agendasnote->has('agendaschannel') ? $this->Html->link($agendasnote->agendaschannel->description, ['controller' => 'Agendaschannels', 'action' => 'view', $agendasnote->agendaschannel->id]) : '' ?></td>
                <td><?= $agendasnote->has('agenda') ? $this->Html->link($agendasnote->agenda->etiquetaadicional, ['controller' => 'Agendas', 'action' => 'view', $agendasnote->agenda->id]) : '' ?></td>
                <td><?= h($agendasnote->timeinformed) ?></td>
                <td><?= h($agendasnote->description) ?></td>
                <td><?= $agendasnote->has('statusfuncional') ? $this->Html->link($agendasnote->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $agendasnote->statusfuncional->id]) : '' ?></td>
                <td><?= h($agendasnote->keywords) ?></td>
                <td><?= h($agendasnote->actionplan) ?></td>
                <td><?= h($agendasnote->selection) ?></td>
                <td><?= h($agendasnote->beshared) ?></td>
                <td><?= h($agendasnote->created) ?></td>
                <td><?= h($agendasnote->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agendasnote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agendasnote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agendasnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendasnote->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
