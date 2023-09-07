<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresausencia[]|\Cake\Collection\CollectionInterface $consultoresausencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultoresausencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresausenciastipos'), ['controller' => 'Consultoresausenciastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresausenciastipo'), ['controller' => 'Consultoresausenciastipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresausencias index large-9 medium-8 columns content">
    <h3><?= __('Plano de Ausências') ?></h3>
   <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultoresausenciastipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoresausencias as $consultoresausencia): ?>
            <tr>
                <td><?= $this->Number->format($consultoresausencia->id) ?></td>
                <td><?= $consultoresausencia->has('consultore') ? $this->Html->link($consultoresausencia->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresausencia->consultore->id]) : '' ?></td>
                                <td><?= $consultoresausencia->has('consultoresausenciastipo') ? $this->Html->link($consultoresausencia->consultoresausenciastipo->descricao, ['controller' => 'Consultoresausenciastipos', 'action' => 'view', $consultoresausencia->consultoresausenciastipo->id]) : '' ?></td>
                <td><?= $this->Number->format($consultoresausencia->periodo) ?></td>
                <td><?= h($consultoresausencia->datainicio) ?></td>
                <td><?= h($consultoresausencia->datafim) ?></td>                
                <td><?= $consultoresausencia->has('statusfuncional') ? $this->Html->link($consultoresausencia->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $consultoresausencia->statusfuncional->id]) : '' ?></td>
                <td><?= h($consultoresausencia->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultoresausencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultoresausencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultoresausencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresausencia->id)]) ?>
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
