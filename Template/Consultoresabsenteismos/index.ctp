<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresabsenteismo[]|\Cake\Collection\CollectionInterface $consultoresabsenteismos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultoresabsenteismo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresabsenteismos index large-9 medium-8 columns content">
    <h3><?= __('Consultoresabsenteismos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('informadoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoresabsenteismos as $consultoresabsenteismo): ?>
            <tr>
                <td><?= $this->Number->format($consultoresabsenteismo->id) ?></td>
                <td><?= $consultoresabsenteismo->has('consultore') ? $this->Html->link($consultoresabsenteismo->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresabsenteismo->consultore->id]) : '' ?></td>
                <td><?= h($consultoresabsenteismo->resumo) ?></td>
                <td><?= h($consultoresabsenteismo->datainicio) ?></td>
                <td><?= h($consultoresabsenteismo->datafim) ?></td>
                <td><?= h($consultoresabsenteismo->informadoem) ?></td>
                <td><?= h($consultoresabsenteismo->created) ?></td>
                <td><?= h($consultoresabsenteismo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultoresabsenteismo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultoresabsenteismo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultoresabsenteismo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresabsenteismo->id)]) ?>
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
