<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupchamado $fupchamado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fupchamado'), ['action' => 'edit', $fupchamado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fupchamado'), ['action' => 'delete', $fupchamado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupchamado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fupchamados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupchamado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fupchamados view large-9 medium-8 columns content">
    <h3><?= h($fupchamado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupagenda') ?></th>
            <td><?= $fupchamado->has('fupagenda') ? $this->Html->link($fupchamado->fupagenda->descricao, ['controller' => 'Fupagendas', 'action' => 'view', $fupchamado->fupagenda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($fupchamado->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kanban') ?></th>
            <td><?= h($fupchamado->kanban) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chamadonr') ?></th>
            <td><?= h($fupchamado->chamadonr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($fupchamado->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($fupchamado->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusdetalhado') ?></th>
            <td><?= h($fupchamado->statusdetalhado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analista') ?></th>
            <td><?= h($fupchamado->analista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($fupchamado->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupchamado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($fupchamado->prio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastupdate') ?></th>
            <td><?= h($fupchamado->lastupdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupchamado->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupchamado->modified) ?></td>
        </tr>
    </table>
</div>
