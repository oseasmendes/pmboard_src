<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlagente[]|\Cake\Collection\CollectionInterface $jiraetlagentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jiraetlagente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlagentes index large-9 medium-8 columns content">
    <h3><?= __('Jiraetlagentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jiraetlagentes as $jiraetlagente): ?>
            <tr>
                <td><?= $this->Number->format($jiraetlagente->id) ?></td>
                <td><?= h($jiraetlagente->nome) ?></td>
                <td><?= $jiraetlagente->has('consultore') ? $this->Html->link($jiraetlagente->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $jiraetlagente->consultore->id]) : '' ?></td>
                <td><?= h($jiraetlagente->created) ?></td>
                <td><?= h($jiraetlagente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jiraetlagente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jiraetlagente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jiraetlagente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlagente->id)]) ?>
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
