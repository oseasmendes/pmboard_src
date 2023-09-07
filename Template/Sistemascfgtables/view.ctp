<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtable $sistemascfgtable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgtable'), ['action' => 'edit', $sistemascfgtable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgtable'), ['action' => 'delete', $sistemascfgtable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgtable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgtables'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgtable'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgtables view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgtable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgtable->has('sistema') ? $this->Html->link($sistemascfgtable->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgtable->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tabelanome') ?></th>
            <td><?= h($sistemascfgtable->tabelanome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgtable->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= h($sistemascfgtable->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasmodulo') ?></th>
            <td><?= $sistemascfgtable->has('sistemasmodulo') ? $this->Html->link($sistemascfgtable->sistemasmodulo->id, ['controller' => 'Sistemasmodulos', 'action' => 'view', $sistemascfgtable->sistemasmodulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chaveprimaria') ?></th>
            <td><?= h($sistemascfgtable->chaveprimaria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgtable->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgtable->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgtable->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemascfgtable->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhe') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgtable->detalhe)); ?>
    </div>
</div>
