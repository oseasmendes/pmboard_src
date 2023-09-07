<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemashistorico $sistemashistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemashistorico'), ['action' => 'edit', $sistemashistorico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemashistorico'), ['action' => 'delete', $sistemashistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemashistorico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemashistoricos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemashistorico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemashistoricos view large-9 medium-8 columns content">
    <h3><?= h($sistemashistorico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemashistorico->has('sistema') ? $this->Html->link($sistemashistorico->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemashistorico->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versaoatual') ?></th>
            <td><?= h($sistemashistorico->versaoatual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($sistemashistorico->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versaopathatual') ?></th>
            <td><?= h($sistemashistorico->versaopathatual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemashistorico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataregistro') ?></th>
            <td><?= h($sistemashistorico->dataregistro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataimplantacao') ?></th>
            <td><?= h($sistemashistorico->dataimplantacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataultimaatualizacao') ?></th>
            <td><?= h($sistemashistorico->dataultimaatualizacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemashistorico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemashistorico->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivoultimaalteracao') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemashistorico->motivoultimaalteracao)); ?>
    </div>
</div>
