<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnews $projetosnews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosnews'), ['action' => 'edit', $projetosnews->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosnews'), ['action' => 'delete', $projetosnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosnews->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosnews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosnews'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosnews view large-9 medium-8 columns content">
    <h3><?= h($projetosnews->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosnews->has('projeto') ? $this->Html->link($projetosnews->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosnews->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($projetosnews->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosnews->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosnews->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($projetosnews->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($projetosnews->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= h($projetosnews->sistema) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complexidade') ?></th>
            <td><?= h($projetosnews->complexidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= h($projetosnews->evento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosnews->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($projetosnews->prio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datalancto') ?></th>
            <td><?= h($projetosnews->datalancto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datacheckin') ?></th>
            <td><?= h($projetosnews->datacheckin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosnews->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosnews->modified) ?></td>
        </tr>
    </table>
</div>
