<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasdepartamento $sistemasdepartamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasdepartamento'), ['action' => 'edit', $sistemasdepartamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasdepartamento'), ['action' => 'delete', $sistemasdepartamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdepartamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasdepartamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasdepartamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasdepartamentos view large-9 medium-8 columns content">
    <h3><?= h($sistemasdepartamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasdepartamento->has('sistema') ? $this->Html->link($sistemasdepartamento->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasdepartamento->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $sistemasdepartamento->has('departamento') ? $this->Html->link($sistemasdepartamento->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasdepartamento->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasdepartamento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasdepartamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasdepartamento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasdepartamento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objetivos') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasdepartamento->objetivos)); ?>
    </div>
</div>
