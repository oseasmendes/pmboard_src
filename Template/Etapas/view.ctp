<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etapa $etapa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etapa'), ['action' => 'edit', $etapa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etapa'), ['action' => 'delete', $etapa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etapa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Etapas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etapa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etapas view large-9 medium-8 columns content">
    <h3><?= h($etapa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($etapa->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($etapa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($etapa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($etapa->modified) ?></td>
        </tr>
    </table>
</div>
