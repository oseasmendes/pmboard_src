<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasnota $projetosentregasnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasnota'), ['action' => 'edit', $projetosentregasnota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasnota'), ['action' => 'delete', $projetosentregasnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasnota->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasnotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasnota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasnotas view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasnota->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosentregasnota->has('projetosprodutosentrega') ? $this->Html->link($projetosentregasnota->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregasnota->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notatipo') ?></th>
            <td><?= $projetosentregasnota->has('notatipo') ? $this->Html->link($projetosentregasnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosentregasnota->notatipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasnota->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasnota->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasnota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasnota->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasnota->historico)); ?>
    </div>
</div>
