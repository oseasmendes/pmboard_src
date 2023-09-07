<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Severidade[]|\Cake\Collection\CollectionInterface $severidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Severidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="severidades index large-9 medium-8 columns content">
    <h3><?= __('Severidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($severidades as $severidade): ?>
            <tr>
                <td><?= $this->Number->format($severidade->id) ?></td>
                <td><?= h($severidade->descricao) ?></td>
                <td><?= $this->Number->format($severidade->nota) ?></td>
                <td><?= h($severidade->created) ?></td>
                <td><?= h($severidade->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $severidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $severidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $severidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $severidade->id)]) ?>
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
