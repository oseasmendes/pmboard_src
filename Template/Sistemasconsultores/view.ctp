<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasconsultore $sistemasconsultore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasconsultore'), ['action' => 'edit', $sistemasconsultore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasconsultore'), ['action' => 'delete', $sistemasconsultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasconsultore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasconsultores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasconsultore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasconsultores view large-9 medium-8 columns content">
    <h3><?= h($sistemasconsultore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $sistemasconsultore->has('consultore') ? $this->Html->link($sistemasconsultore->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $sistemasconsultore->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Knowhow') ?></th>
            <td><?= $sistemasconsultore->has('knowhow') ? $this->Html->link($sistemasconsultore->knowhow->descricao, ['controller' => 'Knowhows', 'action' => 'view', $sistemasconsultore->knowhow->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Principalfuncao') ?></th>
            <td><?= h($sistemasconsultore->principalfuncao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividadeexecutada') ?></th>
            <td><?= h($sistemasconsultore->atividadeexecutada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultoria') ?></th>
            <td><?= h($sistemasconsultore->consultoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasconsultore->has('sistema') ? $this->Html->link($sistemasconsultore->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasconsultore->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasconsultore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alocacao') ?></th>
            <td><?= $this->Number->format($sistemasconsultore->alocacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataatividade') ?></th>
            <td><?= h($sistemasconsultore->dataatividade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasconsultore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasconsultore->modified) ?></td>
        </tr>
    </table>
</div>
