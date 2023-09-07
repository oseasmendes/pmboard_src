<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosgrooming[]|\Cake\Collection\CollectionInterface $projetosgroomings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosgrooming'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosgroomingsitems'), ['controller' => 'Projetosgroomingsitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosgroomingsitem'), ['controller' => 'Projetosgroomingsitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosgroomings index large-9 medium-8 columns content">
    <h3><?= __('Projetosgroomings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosgroomings as $projetosgrooming): ?>
            <tr>
                <td><?= $this->Number->format($projetosgrooming->id) ?></td>
                <td><?= h($projetosgrooming->descricao) ?></td>
                <td><?= h($projetosgrooming->date) ?></td>
                <td><?= $projetosgrooming->has('projetossprint') ? $this->Html->link($projetosgrooming->projetossprint->descricao, ['controller' => 'Projetossprints', 'action' => 'view', $projetosgrooming->projetossprint->id]) : '' ?></td>
                <td><?= h($projetosgrooming->ativo) ?></td>
                <td><?= h($projetosgrooming->created) ?></td>
                <td><?= h($projetosgrooming->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosgrooming->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosgrooming->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosgrooming->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosgrooming->id)]) ?>
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
