<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosgroomingsitem[]|\Cake\Collection\CollectionInterface $projetosgroomingsitems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosgroomingsitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosgroomings'), ['controller' => 'Projetosgroomings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosgrooming'), ['controller' => 'Projetosgroomings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosgroomingsitems index large-9 medium-8 columns content">
    <h3><?= __('Projetosgroomingsitems') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosgrooming_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencianumerica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estimado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfunctional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosgroomingsitems as $projetosgroomingsitem): ?>
            <tr>
                <td><?= $this->Number->format($projetosgroomingsitem->id) ?></td>
                <td><?= $projetosgroomingsitem->has('projetosgrooming') ? $this->Html->link($projetosgroomingsitem->projetosgrooming->id, ['controller' => 'Projetosgroomings', 'action' => 'view', $projetosgroomingsitem->projetosgrooming->id]) : '' ?></td>
                <td><?= $projetosgroomingsitem->has('projetosprodutosentrega') ? $this->Html->link($projetosgroomingsitem->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosgroomingsitem->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= $this->Number->format($projetosgroomingsitem->referencianumerica) ?></td>
                <td><?= h($projetosgroomingsitem->referencia) ?></td>
                <td><?= $this->Number->format($projetosgroomingsitem->estimado) ?></td>
                <td><?= h($projetosgroomingsitem->descricao) ?></td>
                <td><?= $this->Number->format($projetosgroomingsitem->statusfunctional_id) ?></td>
                <td><?= h($projetosgroomingsitem->created) ?></td>
                <td><?= h($projetosgroomingsitem->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosgroomingsitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosgroomingsitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosgroomingsitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosgroomingsitem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
