<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsallocation $projetossprintsallocation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsallocation'), ['action' => 'edit', $projetossprintsallocation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsallocation'), ['action' => 'delete', $projetossprintsallocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsallocation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsallocations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsallocation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetossprintsallocations view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsallocation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetossprintsallocation->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetossprint') ?></th>
            <td><?= $projetossprintsallocation->has('projetossprint') ? $this->Html->link($projetossprintsallocation->projetossprint->descricao, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsallocation->projetossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetossprintsallocation->has('consultore') ? $this->Html->link($projetossprintsallocation->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetossprintsallocation->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competencia') ?></th>
            <td><?= $projetossprintsallocation->has('competencia') ? $this->Html->link($projetossprintsallocation->competencia->descricao, ['controller' => 'Competencias', 'action' => 'view', $projetossprintsallocation->competencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsallocation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsallocation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsallocation->modified) ?></td>
        </tr>
    </table>
</div>
