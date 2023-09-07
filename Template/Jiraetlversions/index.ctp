<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlversion[]|\Cake\Collection\CollectionInterface $jiraetlversions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jiraetlversion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlversions index large-9 medium-8 columns content">
    <h3><?= __('Jiraetlversions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jiraetlversions as $jiraetlversion): ?>
            <tr>
                <td><?= $this->Number->format($jiraetlversion->id) ?></td>
                <td><?= h($jiraetlversion->versao) ?></td>
                <td><?= $jiraetlversion->has('projetossprint') ? $this->Html->link($jiraetlversion->projetossprint->id, ['controller' => 'Projetossprints', 'action' => 'view', $jiraetlversion->projetossprint->id]) : '' ?></td>
                <td><?= h($jiraetlversion->created) ?></td>
                <td><?= h($jiraetlversion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jiraetlversion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jiraetlversion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jiraetlversion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlversion->id)]) ?>
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
