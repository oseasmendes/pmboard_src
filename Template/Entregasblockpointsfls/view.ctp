<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpointsfl $entregasblockpointsfl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entregasblockpointsfl'), ['action' => 'edit', $entregasblockpointsfl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entregasblockpointsfl'), ['action' => 'delete', $entregasblockpointsfl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregasblockpointsfl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entregasblockpointsfls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entregasblockpointsfl'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entregasblockpoints'), ['controller' => 'Entregasblockpoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entregasblockpoint'), ['controller' => 'Entregasblockpoints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entregasblockpointsfls view large-9 medium-8 columns content">
    <h3><?= h($entregasblockpointsfl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Entregasblockpoint') ?></th>
            <td><?= $entregasblockpointsfl->has('entregasblockpoint') ? $this->Html->link($entregasblockpointsfl->entregasblockpoint->id, ['controller' => 'Entregasblockpoints', 'action' => 'view', $entregasblockpointsfl->entregasblockpoint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($entregasblockpointsfl->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entregasblockpointsfl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($entregasblockpointsfl->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entregasblockpointsfl->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entregasblockpointsfl->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $entregasblockpointsfl->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($entregasblockpointsfl->detalhes)); ?>
    </div>
</div>
