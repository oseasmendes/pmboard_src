<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasbriefing[]|\Cake\Collection\CollectionInterface $sistemasbriefings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasbriefing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Smcplans'), ['controller' => 'Smcplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Smcplan'), ['controller' => 'Smcplans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasbriefings index large-9 medium-8 columns content">
    <h3><?= __('Sistemasbriefings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataregistro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('smcplan_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasbriefings as $sistemasbriefing): ?>
            <tr>
                <td><?= $this->Number->format($sistemasbriefing->id) ?></td>
                <td><?= $sistemasbriefing->has('sistema') ? $this->Html->link($sistemasbriefing->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasbriefing->sistema->id]) : '' ?></td>
                <td><?= h($sistemasbriefing->dataregistro) ?></td>
                <td><?= $sistemasbriefing->has('departamento') ? $this->Html->link($sistemasbriefing->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasbriefing->departamento->id]) : '' ?></td>
                <td><?= h($sistemasbriefing->created) ?></td>
                <td><?= h($sistemasbriefing->modified) ?></td>
                <td><?= $sistemasbriefing->has('smcplan') ? $this->Html->link($sistemasbriefing->smcplan->descricao, ['controller' => 'Smcplans', 'action' => 'view', $sistemasbriefing->smcplan->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasbriefing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasbriefing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasbriefing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasbriefing->id)]) ?>
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
