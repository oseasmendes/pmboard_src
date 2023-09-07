<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretrosaction $projetossprintsretrosaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsretrosaction'), ['action' => 'edit', $projetossprintsretrosaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsretrosaction'), ['action' => 'delete', $projetossprintsretrosaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrosaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['controller' => 'Projetossprintsretrositems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['controller' => 'Projetossprintsretrositems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pillars'), ['controller' => 'Pillars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pillar'), ['controller' => 'Pillars', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pillarsareas'), ['controller' => 'Pillarsareas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pillarsarea'), ['controller' => 'Pillarsareas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pillarsresponsabilities'), ['controller' => 'Pillarsresponsabilities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pillarsresponsability'), ['controller' => 'Pillarsresponsabilities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetossprintsretrosactions view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsretrosaction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetossprintsretrositem') ?></th>
            <td><?= $projetossprintsretrosaction->has('projetossprintsretrositem') ? $this->Html->link($projetossprintsretrosaction->projetossprintsretrositem->descricao, ['controller' => 'Projetossprintsretrositems', 'action' => 'view', $projetossprintsretrosaction->projetossprintsretrositem->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetossprintsretrosaction->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Propostopor') ?></th>
            <td><?= h($projetossprintsretrosaction->propostopor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetossprintsretrosaction->has('consultore') ? $this->Html->link($projetossprintsretrosaction->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetossprintsretrosaction->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pillar') ?></th>
            <td><?= $projetossprintsretrosaction->has('pillar') ? $this->Html->link($projetossprintsretrosaction->pillar->descricao, ['controller' => 'Pillars', 'action' => 'view', $projetossprintsretrosaction->pillar->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pillarsarea') ?></th>
            <td><?= $projetossprintsretrosaction->has('pillarsarea') ? $this->Html->link($projetossprintsretrosaction->pillarsarea->descricao, ['controller' => 'Pillarsareas', 'action' => 'view', $projetossprintsretrosaction->pillarsarea->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pillarsresponsability') ?></th>
            <td><?= $projetossprintsretrosaction->has('pillarsresponsability') ? $this->Html->link($projetossprintsretrosaction->pillarsresponsability->descricao, ['controller' => 'Pillarsresponsabilities', 'action' => 'view', $projetossprintsretrosaction->pillarsresponsability->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetossprintsretrosaction->has('statusfuncional') ? $this->Html->link($projetossprintsretrosaction->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetossprintsretrosaction->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsretrosaction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsretrosaction->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsretrosaction->modified) ?></td>
        </tr>
    </table>
</div>
