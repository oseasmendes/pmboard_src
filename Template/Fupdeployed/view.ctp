<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupdeployed $fupdeployed
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fupdeployed'), ['action' => 'edit', $fupdeployed->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fupdeployed'), ['action' => 'delete', $fupdeployed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupdeployed->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fupdeployed'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupdeployed'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fupdeployed view large-9 medium-8 columns content">
    <h3><?= h($fupdeployed->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupagenda') ?></th>
            <td><?= $fupdeployed->has('fupagenda') ? $this->Html->link($fupdeployed->fupagenda->id, ['controller' => 'Fupagendas', 'action' => 'view', $fupdeployed->fupagenda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($fupdeployed->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kanban') ?></th>
            <td><?= h($fupdeployed->kanban) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Esupportid') ?></th>
            <td><?= h($fupdeployed->esupportid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($fupdeployed->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($fupdeployed->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusdetalhado') ?></th>
            <td><?= h($fupdeployed->statusdetalhado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analista') ?></th>
            <td><?= h($fupdeployed->analista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($fupdeployed->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupdeployed->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($fupdeployed->prio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastupdate') ?></th>
            <td><?= h($fupdeployed->lastupdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupdeployed->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupdeployed->modified) ?></td>
        </tr>
    </table>
</div>
