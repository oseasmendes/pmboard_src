<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsallocation[]|\Cake\Collection\CollectionInterface $projetossprintsallocations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsallocation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsallocations index large-9 medium-8 columns content">
    <h3><?= __('Projetossprintsallocations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprintsallocations as $projetossprintsallocation): ?>
            <tr>
                <td><?= $this->Number->format($projetossprintsallocation->id) ?></td>
                <td><?= h($projetossprintsallocation->descricao) ?></td>
                <td><?= $projetossprintsallocation->has('projetossprint') ? $this->Html->link($projetossprintsallocation->projetossprint->descricao, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsallocation->projetossprint->id]) : '' ?></td>
                <td><?= $projetossprintsallocation->has('consultore') ? $this->Html->link($projetossprintsallocation->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetossprintsallocation->consultore->id]) : '' ?></td>
                <td><?= $projetossprintsallocation->has('competencia') ? $this->Html->link($projetossprintsallocation->competencia->descricao, ['controller' => 'Competencias', 'action' => 'view', $projetossprintsallocation->competencia->id]) : '' ?></td>
                <td><?= h($projetossprintsallocation->created) ?></td>
                <td><?= h($projetossprintsallocation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprintsallocation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprintsallocation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetossprintsallocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsallocation->id)]) ?>
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
