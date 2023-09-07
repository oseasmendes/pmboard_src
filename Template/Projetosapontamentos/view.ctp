<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosapontamento $projetosapontamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosapontamento'), ['action' => 'edit', $projetosapontamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosapontamento'), ['action' => 'delete', $projetosapontamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosapontamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosapontamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosapontamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosapontamentos view large-9 medium-8 columns content">
    <h3><?= h($projetosapontamento->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosapontamento->has('consultore') ? $this->Html->link($projetosapontamento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosapontamento->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosapontamento->has('projetosprodutosentrega') ? $this->Html->link($projetosapontamento->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosapontamento->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosapontamento->has('statusfuncional') ? $this->Html->link($projetosapontamento->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosapontamento->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosapontamento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($projetosapontamento->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosapontamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temporealizado') ?></th>
            <td><?= $this->Number->format($projetosapontamento->temporealizado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosapontamento->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horainicio') ?></th>
            <td><?= h($projetosapontamento->horainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horafim') ?></th>
            <td><?= h($projetosapontamento->horafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosapontamento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosapontamento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosapontamento->historico)); ?>
    </div>
</div>
