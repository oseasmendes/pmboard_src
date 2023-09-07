<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdbdet $sistemascfgdbdet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgdbdet'), ['action' => 'edit', $sistemascfgdbdet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgdbdet'), ['action' => 'delete', $sistemascfgdbdet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdbdet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgdbdets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgdbdet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgdbdets view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgdbdet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistemascfgdb') ?></th>
            <td><?= $sistemascfgdbdet->has('sistemascfgdb') ? $this->Html->link($sistemascfgdbdet->sistemascfgdb->id, ['controller' => 'Sistemascfgdbs', 'action' => 'view', $sistemascfgdbdet->sistemascfgdb->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavelinventario') ?></th>
            <td><?= h($sistemascfgdbdet->responsavelinventario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->tamanho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtetabelas') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->qtetabelas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtecolunas') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->qtecolunas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qteregistros') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->qteregistros) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtestoreprocedures') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->qtestoreprocedures) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtetriggers') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->qtetriggers) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Espacoemdisco') ?></th>
            <td><?= $this->Number->format($sistemascfgdbdet->espacoemdisco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainventario') ?></th>
            <td><?= h($sistemascfgdbdet->datainventario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgdbdet->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgdbdet->modified) ?></td>
        </tr>
    </table>
</div>
