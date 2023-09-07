<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Superiorimediato[]|\Cake\Collection\CollectionInterface $superiorimediatos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Superiorimediato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetousuarios'), ['controller' => 'Projetousuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetousuario'), ['controller' => 'Projetousuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superiorimediatos index large-9 medium-8 columns content">
    <h3><?= __('Gestores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($superiorimediatos as $superiorimediato): ?>
            <tr>
                <td><?= $this->Number->format($superiorimediato->id) ?></td>
                <td><?= h($superiorimediato->nome) ?></td>
                <td><?= h($superiorimediato->created) ?></td>
                <td><?= h($superiorimediato->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $superiorimediato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $superiorimediato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $superiorimediato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superiorimediato->id)]) ?>
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
