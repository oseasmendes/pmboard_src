<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasurl $projetosprodutosentregasurl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosentregasurl'), ['action' => 'edit', $projetosprodutosentregasurl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosentregasurl'), ['action' => 'delete', $projetosprodutosentregasurl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasurl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasurls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasurl'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosentregasurls view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosentregasurl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosentregasurl->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasurl->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasurl->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosentregasurl->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($projetosprodutosentregasurl->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregasurl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentregasurl->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentregasurl->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosprodutosentregasurl->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosentregasurl->url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Detalhe') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosentregasurl->detalhe)); ?>
    </div>
</div>
