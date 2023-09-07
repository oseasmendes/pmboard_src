<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutover[]|\Cake\Collection\CollectionInterface $projetoscutovers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetoscutover'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetoscutoversflws'), ['controller' => 'Projetoscutoversflws', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetoscutoversflw'), ['controller' => 'Projetoscutoversflws', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscutovers index large-9 medium-8 columns content">
    <h3><?= __('Projetoscutovers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etapa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetoscutovers as $projetoscutover): ?>
            <tr>
                <td><?= $this->Number->format($projetoscutover->id) ?></td>
                <td><?= $projetoscutover->has('projeto') ? $this->Html->link($projetoscutover->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetoscutover->projeto->id]) : '' ?></td>
                <td><?= $projetoscutover->has('projetosproduto') ? $this->Html->link($projetoscutover->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetoscutover->projetosproduto->id]) : '' ?></td>
                <td><?= $projetoscutover->has('etapa') ? $this->Html->link($projetoscutover->etapa->descricao, ['controller' => 'Etapas', 'action' => 'view', $projetoscutover->etapa->id]) : '' ?></td>
                <td><?= h($projetoscutover->dataemissao) ?></td>
                <td><?= h($projetoscutover->descricao) ?></td>
                <td><?= h($projetoscutover->responsavel) ?></td>
                <td><?= $projetoscutover->has('statusfuncional') ? $this->Html->link($projetoscutover->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetoscutover->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetoscutover->created) ?></td>
                <td><?= h($projetoscutover->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetoscutover->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetoscutover->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetoscutover->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutover->id)]) ?>
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
