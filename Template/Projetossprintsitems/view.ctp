<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsitem $projetossprintsitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsitem'), ['action' => 'edit', $projetossprintsitem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsitem'), ['action' => 'delete', $projetossprintsitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsitem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsitems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsitem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetossprintsitems view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsitem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetossprint') ?></th>
            <td><?= $projetossprintsitem->has('projetossprint') ? $this->Html->link($projetossprintsitem->projetossprint->id, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsitem->projetossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetossprintsitem->has('projetosprodutosentrega') ? $this->Html->link($projetossprintsitem->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetossprintsitem->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetossprintsitem->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taskmain') ?></th>
            <td><?= h($projetossprintsitem->taskmain) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tasksub') ?></th>
            <td><?= h($projetossprintsitem->tasksub) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetossprintsitem->has('statusfuncional') ? $this->Html->link($projetossprintsitem->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetossprintsitem->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetossprintsitem->has('pareto') ? $this->Html->link($projetossprintsitem->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetossprintsitem->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsitem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Storyppoints') ?></th>
            <td><?= $this->Number->format($projetossprintsitem->storyppoints) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Storypointsrevised') ?></th>
            <td><?= $this->Number->format($projetossprintsitem->storypointsrevised) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataplanning') ?></th>
            <td><?= h($projetossprintsitem->dataplanning) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsitem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsitem->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datarevised') ?></th>
            <td><?= h($projetossprintsitem->datarevised) ?></td>
        </tr>
    </table>
</div>
