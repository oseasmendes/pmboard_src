<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupnotstarted $fupnotstarted
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fupnotstarted'), ['action' => 'edit', $fupnotstarted->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fupnotstarted'), ['action' => 'delete', $fupnotstarted->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupnotstarted->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fupnotstarted'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupnotstarted'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fupnotstarted view large-9 medium-8 columns content">
    <h3><?= h($fupnotstarted->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupagenda') ?></th>
            <td><?= $fupnotstarted->has('fupagenda') ? $this->Html->link($fupnotstarted->fupagenda->id, ['controller' => 'Fupagendas', 'action' => 'view', $fupnotstarted->fupagenda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($fupnotstarted->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kanban') ?></th>
            <td><?= h($fupnotstarted->kanban) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Esupportid') ?></th>
            <td><?= h($fupnotstarted->esupportid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($fupnotstarted->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($fupnotstarted->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusdetalhado') ?></th>
            <td><?= h($fupnotstarted->statusdetalhado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analista') ?></th>
            <td><?= h($fupnotstarted->analista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($fupnotstarted->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupnotstarted->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($fupnotstarted->prio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastupdate') ?></th>
            <td><?= h($fupnotstarted->lastupdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupnotstarted->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupnotstarted->modified) ?></td>
        </tr>
    </table>
</div>
