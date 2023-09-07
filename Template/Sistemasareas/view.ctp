<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasarea $sistemasarea
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasarea'), ['action' => 'edit', $sistemasarea->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasarea'), ['action' => 'delete', $sistemasarea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasarea->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasareas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasarea'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasareas view large-9 medium-8 columns content">
    <h3><?= h($sistemasarea->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasarea->has('sistema') ? $this->Html->link($sistemasarea->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasarea->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $sistemasarea->has('departamento') ? $this->Html->link($sistemasarea->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasarea->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($sistemasarea->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipolicenca') ?></th>
            <td><?= h($sistemasarea->tipolicenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasarea->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Papeldocontato') ?></th>
            <td><?= h($sistemasarea->papeldocontato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contatoramal') ?></th>
            <td><?= h($sistemasarea->contatoramal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contatoemail') ?></th>
            <td><?= h($sistemasarea->contatoemail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasarea->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidadeusuarios') ?></th>
            <td><?= $this->Number->format($sistemasarea->quantidadeusuarios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidadelicencas') ?></th>
            <td><?= $this->Number->format($sistemasarea->quantidadelicencas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasarea->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasarea->modified) ?></td>
        </tr>
    </table>
</div>
