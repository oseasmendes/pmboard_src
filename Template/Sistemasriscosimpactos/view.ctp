<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasriscosimpacto $sistemasriscosimpacto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasriscosimpacto'), ['action' => 'edit', $sistemasriscosimpacto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasriscosimpacto'), ['action' => 'delete', $sistemasriscosimpacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasriscosimpacto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasriscosimpactos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasriscosimpacto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasriscosimpactos view large-9 medium-8 columns content">
    <h3><?= h($sistemasriscosimpacto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasriscosimpacto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($sistemasriscosimpacto->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($sistemasriscosimpacto->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasriscosimpacto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemarisco Id') ?></th>
            <td><?= $this->Number->format($sistemasriscosimpacto->sistemarisco_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasriscosimpacto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasriscosimpacto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhamento') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasriscosimpacto->detalhamento)); ?>
    </div>
</div>
