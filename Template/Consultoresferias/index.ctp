<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresferia[]|\Cake\Collection\CollectionInterface $consultoresferias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultoresferia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresferias index large-9 medium-8 columns content">
    <h3><?= __('Consultores Ferias') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>s              
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('informadoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planejamentode') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoresferias as $consultoresferia): ?>
            <tr>
                <td><?= $this->Number->format($consultoresferia->id) ?></td>
                <td><?= $consultoresferia->has('consultore') ? $this->Html->link($consultoresferia->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresferia->consultore->id]) : '' ?></td>                
                <td><?= h($consultoresferia->datainicio) ?></td>
                <td><?= h($consultoresferia->datafim) ?></td>             
                <td><?= $consultoresferia->has('statusfuncional') ? $this->Html->link($consultoresferia->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $consultoresferia->statusfuncional->id]) : '' ?></td>
                <td><?= $this->Number->format($consultoresferia->periodo) ?></td>
                <td><?= h($consultoresferia->informadoem) ?></td>
                <td><?= h($consultoresferia->planejamentode) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultoresferia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultoresferia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultoresferia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresferia->id)]) ?>
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
