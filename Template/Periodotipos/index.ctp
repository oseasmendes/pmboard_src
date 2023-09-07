<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodotipo[]|\Cake\Collection\CollectionInterface $periodotipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Periodotipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodotipos index large-9 medium-8 columns content">
    <h3><?= __('Periodotipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($periodotipos as $periodotipo): ?>
            <tr>
                <td><?= $this->Number->format($periodotipo->id) ?></td>
                <td><?= h($periodotipo->descricao) ?></td>
                <td><?= $this->Number->format($periodotipo->dias) ?></td>
                <td><?= h($periodotipo->created) ?></td>
                <td><?= h($periodotipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $periodotipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $periodotipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $periodotipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodotipo->id)]) ?>
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
