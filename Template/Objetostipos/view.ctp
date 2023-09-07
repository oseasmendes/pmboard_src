<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Objetostipo $objetostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Objetostipo'), ['action' => 'edit', $objetostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Objetostipo'), ['action' => 'delete', $objetostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Objetostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objetostipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objetostipos view large-9 medium-8 columns content">
    <h3><?= h($objetostipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($objetostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objetostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($objetostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($objetostipo->modified) ?></td>
        </tr>
    </table>
</div>
