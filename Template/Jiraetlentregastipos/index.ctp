<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlentregastipo[]|\Cake\Collection\CollectionInterface $jiraetlentregastipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jiraetlentregastipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlentregastipos index large-9 medium-8 columns content">
    <h3><?= __('Jiraetlentregastipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('JiraIssueType') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entregastipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jiraetlentregastipos as $jiraetlentregastipo): ?>
            <tr>
                <td><?= $this->Number->format($jiraetlentregastipo->id) ?></td>
                <td><?= h($jiraetlentregastipo->Descricao) ?></td>
                <td><?= h($jiraetlentregastipo->JiraIssueType) ?></td>
                <td><?= $jiraetlentregastipo->has('entregastipo') ? $this->Html->link($jiraetlentregastipo->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $jiraetlentregastipo->entregastipo->id]) : '' ?></td>
                <td><?= h($jiraetlentregastipo->created) ?></td>
                <td><?= h($jiraetlentregastipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jiraetlentregastipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jiraetlentregastipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jiraetlentregastipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlentregastipo->id)]) ?>
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
