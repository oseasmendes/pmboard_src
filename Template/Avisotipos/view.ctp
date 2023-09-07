<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avisotipo $avisotipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avisotipo'), ['action' => 'edit', $avisotipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avisotipo'), ['action' => 'delete', $avisotipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avisotipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avisotipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avisotipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avisotipos view large-9 medium-8 columns content">
    <h3><?= h($avisotipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($avisotipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($avisotipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($avisotipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($avisotipo->modified) ?></td>
        </tr>
    </table>
</div>
