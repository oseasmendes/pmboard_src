<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgurl $sistemascfgurl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgurl'), ['action' => 'edit', $sistemascfgurl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgurl'), ['action' => 'delete', $sistemascfgurl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgurl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgurls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgurl'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgurls view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgurl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgurl->has('sistema') ? $this->Html->link($sistemascfgurl->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgurl->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgurl->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacao') ?></th>
            <td><?= h($sistemascfgurl->observacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasdoc') ?></th>
            <td><?= $sistemascfgurl->has('sistemasdoc') ? $this->Html->link($sistemascfgurl->sistemasdoc->documentonome, ['controller' => 'Sistemasdocs', 'action' => 'view', $sistemascfgurl->sistemasdoc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgurl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgurl->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgurl->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemascfgurl->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgurl->detalhes)); ?>
    </div>
</div>
