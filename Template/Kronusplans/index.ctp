<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronusplan[]|\Cake\Collection\CollectionInterface $kronusplans
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronus'), ['controller' => 'Kronus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronus'), ['controller' => 'Kronus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronusitems'), ['controller' => 'Kronusitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['controller' => 'Kronusitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronusplans index large-9 medium-8 columns content">
    <h3><?= __('Kronusplans') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('version') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kronusplantype') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kronusplans as $kronusplan): ?>
            <tr>
                <td><?= $this->Number->format($kronusplan->id) ?></td>
                <td><?= $kronusplan->has('projeto') ? $this->Html->link($kronusplan->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $kronusplan->projeto->id]) : '' ?></td>
                <td><?= $kronusplan->has('projetosproduto') ? $this->Html->link($kronusplan->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $kronusplan->projetosproduto->id]) : '' ?></td>
                <td><?= $kronusplan->has('statusfuncional') ? $this->Html->link($kronusplan->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $kronusplan->statusfuncional->id]) : '' ?></td>
                <td><?= h($kronusplan->descricao) ?></td>
                <td><?= $this->Number->format($kronusplan->version) ?></td>
                <td><?= h($kronusplan->datainicio) ?></td>
                <td><?= h($kronusplan->datafim) ?></td>
                <td><?= h($kronusplan->created) ?></td>
                <td><?= h($kronusplan->modified) ?></td>
                <td><?= h($kronusplan->kronusplantype) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kronusplan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kronusplan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kronusplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronusplan->id)]) ?>
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
