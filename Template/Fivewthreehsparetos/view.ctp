<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreehspareto $fivewthreehspareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fivewthreehspareto'), ['action' => 'edit', $fivewthreehspareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fivewthreehspareto'), ['action' => 'delete', $fivewthreehspareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehspareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehsparetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreehspareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fivewthreehsparetos view large-9 medium-8 columns content">
    <h3><?= h($fivewthreehspareto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fivewthreeh') ?></th>
            <td><?= $fivewthreehspareto->has('fivewthreeh') ? $this->Html->link($fivewthreehspareto->fivewthreeh->id, ['controller' => 'Fivewthreehs', 'action' => 'view', $fivewthreehspareto->fivewthreeh->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $fivewthreehspareto->has('pareto') ? $this->Html->link($fivewthreehspareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $fivewthreehspareto->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fivewthreehspareto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fivewthreehspareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fivewthreehspareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fivewthreehspareto->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($fivewthreehspareto->data) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($fivewthreehspareto->historico)); ?>
    </div>
</div>
