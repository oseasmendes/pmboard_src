<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillarsarea[]|\Cake\Collection\CollectionInterface $pillarsareas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pillarsarea'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pillarsareas index large-9 medium-8 columns content">
    <h3><?= __('Pillarsareas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pillarsareas as $pillarsarea): ?>
            <tr>
                <td><?= $this->Number->format($pillarsarea->id) ?></td>
                <td><?= h($pillarsarea->descricao) ?></td>
                <td><?= h($pillarsarea->created) ?></td>
                <td><?= h($pillarsarea->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pillarsarea->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pillarsarea->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pillarsarea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pillarsarea->id)]) ?>
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
