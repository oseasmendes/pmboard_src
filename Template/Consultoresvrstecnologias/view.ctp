<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresvrstecnologia $consultoresvrstecnologia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoresvrstecnologia'), ['action' => 'edit', $consultoresvrstecnologia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoresvrstecnologia'), ['action' => 'delete', $consultoresvrstecnologia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresvrstecnologia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoresvrstecnologias view large-9 medium-8 columns content">
    <h3><?= h($consultoresvrstecnologia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $consultoresvrstecnologia->has('consultore') ? $this->Html->link($consultoresvrstecnologia->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresvrstecnologia->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnologia') ?></th>
            <td><?= $consultoresvrstecnologia->has('tecnologia') ? $this->Html->link($consultoresvrstecnologia->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $consultoresvrstecnologia->tecnologia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Knowhow') ?></th>
            <td><?= $consultoresvrstecnologia->has('knowhow') ? $this->Html->link($consultoresvrstecnologia->knowhow->descricao, ['controller' => 'Knowhows', 'action' => 'view', $consultoresvrstecnologia->knowhow->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoresvrstecnologia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoresvrstecnologia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoresvrstecnologia->modified) ?></td>
        </tr>
    </table>
</div>
