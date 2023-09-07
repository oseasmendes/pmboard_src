<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasdiario $projetosprodutosentregasdiario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosentregasdiario'), ['action' => 'edit', $projetosprodutosentregasdiario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosentregasdiario'), ['action' => 'delete', $projetosprodutosentregasdiario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasdiario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasdiarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasdiario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosentregasdiarios view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosentregasdiario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosentregasdiario->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasdiario->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasdiario->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosprodutosentregasdiario->has('consultore') ? $this->Html->link($projetosprodutosentregasdiario->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosentregasdiario->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($projetosprodutosentregasdiario->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fivewthreeh') ?></th>
            <td><?= $projetosprodutosentregasdiario->has('fivewthreeh') ? $this->Html->link($projetosprodutosentregasdiario->fivewthreeh->description, ['controller' => 'Fivewthreehs', 'action' => 'view', $projetosprodutosentregasdiario->fivewthreeh->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosentregasdiario->has('statusfuncional') ? $this->Html->link($projetosprodutosentregasdiario->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosentregasdiario->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregasdiario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentregasdiario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentregasdiario->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosprodutosentregasdiario->data) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Feitoontem') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosentregasdiario->feitoontem)); ?>
    </div>
    <div class="row">
        <h4><?= __('Feitohoje') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosentregasdiario->feitohoje)); ?>
    </div>
    <div class="row">
        <h4><?= __('Impedimento') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosentregasdiario->impedimento)); ?>
    </div>
</div>
