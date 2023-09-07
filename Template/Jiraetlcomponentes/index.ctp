<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlcomponente[]|\Cake\Collection\CollectionInterface $jiraetlcomponentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jiraetlcomponente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlcomponentes index large-9 medium-8 columns content">
    <h3><?= __('Jiraetlcomponentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('componente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jiraetlcomponentes as $jiraetlcomponente): ?>
            <tr>
                <td><?= $this->Number->format($jiraetlcomponente->id) ?></td>
                <td><?= h($jiraetlcomponente->componente) ?></td>
                <td><?= $jiraetlcomponente->has('projetosproduto') ? $this->Html->link($jiraetlcomponente->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $jiraetlcomponente->projetosproduto->id]) : '' ?></td>
                <td><?= $this->Number->format($jiraetlcomponente->ativo) ?></td>
                <td><?= h($jiraetlcomponente->created) ?></td>
                <td><?= h($jiraetlcomponente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jiraetlcomponente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jiraetlcomponente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jiraetlcomponente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlcomponente->id)]) ?>
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
