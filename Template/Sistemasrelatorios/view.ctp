<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrelatorio $sistemasrelatorio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasrelatorio'), ['action' => 'edit', $sistemasrelatorio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasrelatorio'), ['action' => 'delete', $sistemasrelatorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasrelatorio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasrelatorios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasrelatorio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasrelatorios view large-9 medium-8 columns content">
    <h3><?= h($sistemasrelatorio->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasrelatorio->has('sistema') ? $this->Html->link($sistemasrelatorio->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasrelatorio->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($sistemasrelatorio->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sistemasrelatorio->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cabnumer') ?></th>
            <td><?= h($sistemasrelatorio->cabnumer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requestnumber') ?></th>
            <td><?= h($sistemasrelatorio->requestnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version') ?></th>
            <td><?= h($sistemasrelatorio->version) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $sistemasrelatorio->has('departamento') ? $this->Html->link($sistemasrelatorio->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasrelatorio->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relatoriobase') ?></th>
            <td><?= h($sistemasrelatorio->relatoriobase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasrelatorio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datacriacao') ?></th>
            <td><?= h($sistemasrelatorio->datacriacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descontinuadodata') ?></th>
            <td><?= h($sistemasrelatorio->descontinuadodata) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasrelatorio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasrelatorio->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descontinuado') ?></th>
            <td><?= $sistemasrelatorio->descontinuado ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasrelatorio->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objective') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasrelatorio->objective)); ?>
    </div>
    <div class="row">
        <h4><?= __('Script') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasrelatorio->script)); ?>
    </div>
</div>
