<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlpareto $esupportsetlpareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Esupportsetlpareto'), ['action' => 'edit', $esupportsetlpareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Esupportsetlpareto'), ['action' => 'delete', $esupportsetlpareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlpareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Esupportsetlparetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Esupportsetlpareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="esupportsetlparetos view large-9 medium-8 columns content">
    <h3><?= h($esupportsetlpareto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($esupportsetlpareto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($esupportsetlpareto->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($esupportsetlpareto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $esupportsetlpareto->has('pareto') ? $this->Html->link($esupportsetlpareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $esupportsetlpareto->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($esupportsetlpareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($esupportsetlpareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($esupportsetlpareto->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $esupportsetlpareto->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
