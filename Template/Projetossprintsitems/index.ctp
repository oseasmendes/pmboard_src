<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsitem[]|\Cake\Collection\CollectionInterface $projetossprintsitems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsitems index large-9 medium-8 columns content">
    <h3><?= __('Sprint BackLog') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprint_id','SprintId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id','EntrId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taskmain','Main') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tasksub','Sub') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataplanning','Planning') ?></th>
                <th scope="col"><?= $this->Paginator->sort('storyppoints','Story') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id','Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('storypointsrevised','StoryReview') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('pareto_id','Pareto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprintsitems as $projetossprintsitem): ?>
            <tr>
                <td><?= $this->Number->format($projetossprintsitem->id) ?></td>
                <td><?= $projetossprintsitem->has('projetossprint') ? $this->Html->link($projetossprintsitem->projetossprint->id, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsitem->projetossprint->id]) : '' ?></td>
                <td><?= $projetossprintsitem->has('projetosprodutosentrega') ? $this->Html->link($projetossprintsitem->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetossprintsitem->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($projetossprintsitem->referencia) ?></td>
                <td><?= h($projetossprintsitem->taskmain) ?></td>
                <td><?= h($projetossprintsitem->tasksub) ?></td>
                <td><?= h($projetossprintsitem->dataplanning) ?></td>
                <td><?= $this->Number->format($projetossprintsitem->storyppoints) ?></td>
                <td><?= $projetossprintsitem->has('statusfuncional') ? $this->Html->link($projetossprintsitem->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetossprintsitem->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetossprintsitem->created) ?></td>
                <td><?= h($projetossprintsitem->modified) ?></td>
                <td><?= $this->Number->format($projetossprintsitem->storypointsrevised) ?></td>
                <td><?= $projetossprintsitem->has('pareto') ? $this->Html->link($projetossprintsitem->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetossprintsitem->pareto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprintsitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprintsitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetossprintsitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsitem->id)]) ?>
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
