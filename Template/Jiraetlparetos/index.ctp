<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlpareto[]|\Cake\Collection\CollectionInterface $jiraetlparetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jiraetlpareto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlparetos index large-9 medium-8 columns content">
    <h3><?= __('Jiraetlparetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jirastatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jiraetlparetos as $jiraetlpareto): ?>
            <tr>
                <td><?= $this->Number->format($jiraetlpareto->id) ?></td>
                <td><?= h($jiraetlpareto->descricao) ?></td>
                <td><?= h($jiraetlpareto->jirastatus) ?></td>
                <td><?= $jiraetlpareto->has('pareto') ? $this->Html->link($jiraetlpareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $jiraetlpareto->pareto->id]) : '' ?></td>
                <td><?= h($jiraetlpareto->created) ?></td>
                <td><?= h($jiraetlpareto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jiraetlpareto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jiraetlpareto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jiraetlpareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlpareto->id)]) ?>
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
