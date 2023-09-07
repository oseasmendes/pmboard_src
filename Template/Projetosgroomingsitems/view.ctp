<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosgroomingsitem $projetosgroomingsitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosgroomingsitem'), ['action' => 'edit', $projetosgroomingsitem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosgroomingsitem'), ['action' => 'delete', $projetosgroomingsitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosgroomingsitem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosgroomingsitems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosgroomingsitem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosgroomings'), ['controller' => 'Projetosgroomings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosgrooming'), ['controller' => 'Projetosgroomings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosgroomingsitems view large-9 medium-8 columns content">
    <h3><?= h($projetosgroomingsitem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosgrooming') ?></th>
            <td><?= $projetosgroomingsitem->has('projetosgrooming') ? $this->Html->link($projetosgroomingsitem->projetosgrooming->id, ['controller' => 'Projetosgroomings', 'action' => 'view', $projetosgroomingsitem->projetosgrooming->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosgroomingsitem->has('projetosprodutosentrega') ? $this->Html->link($projetosgroomingsitem->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosgroomingsitem->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosgroomingsitem->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosgroomingsitem->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosgroomingsitem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencianumerica') ?></th>
            <td><?= $this->Number->format($projetosgroomingsitem->referencianumerica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estimado') ?></th>
            <td><?= $this->Number->format($projetosgroomingsitem->estimado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quebrado') ?></th>
            <td><?= $this->Number->format($projetosgroomingsitem->quebrado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuntional Id') ?></th>
            <td><?= $this->Number->format($projetosgroomingsitem->statusfuntional_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosgroomingsitem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosgroomingsitem->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comentario') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosgroomingsitem->comentario)); ?>
    </div>
</div>
