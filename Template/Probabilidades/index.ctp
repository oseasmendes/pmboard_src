<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Probabilidade[]|\Cake\Collection\CollectionInterface $probabilidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Probabilidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="probabilidades index large-9 medium-8 columns content">
    <h3><?= __('Probabilidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($probabilidades as $probabilidade): ?>
            <tr>
                <td><?= $this->Number->format($probabilidade->id) ?></td>
                <td><?= h($probabilidade->descricao) ?></td>
                <td><?= h($probabilidade->created) ?></td>
                <td><?= h($probabilidade->modified) ?></td>
                <td><?= $this->Number->format($probabilidade->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $probabilidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $probabilidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $probabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $probabilidade->id)]) ?>
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
