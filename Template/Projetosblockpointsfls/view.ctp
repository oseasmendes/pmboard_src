<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosblockpointsfl $projetosblockpointsfl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosblockpointsfl'), ['action' => 'edit', $projetosblockpointsfl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosblockpointsfl'), ['action' => 'delete', $projetosblockpointsfl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosblockpointsfl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosblockpointsfls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosblockpointsfl'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosblockpoints'), ['controller' => 'Projetosblockpoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosblockpoint'), ['controller' => 'Projetosblockpoints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosblockpointsfls view large-9 medium-8 columns content">
    <h3><?= h($projetosblockpointsfl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosblockpoint') ?></th>
            <td><?= $projetosblockpointsfl->has('projetosblockpoint') ? $this->Html->link($projetosblockpointsfl->projetosblockpoint->descricao, ['controller' => 'Projetosblockpoints', 'action' => 'view', $projetosblockpointsfl->projetosblockpoint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosblockpointsfl->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosblockpointsfl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetosblockpointsfl->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosblockpointsfl->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosblockpointsfl->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosblockpointsfl->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosblockpointsfl->detalhes)); ?>
    </div>
</div>
