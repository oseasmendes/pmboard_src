<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretro[]|\Cake\Collection\CollectionInterface $projetossprintsretros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['controller' => 'Projetossprintsretrositems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['controller' => 'Projetossprintsretrositems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsretros index large-9 medium-8 columns content">
    <h3><?= __('Projetossprintsretros') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referenciaboard') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprintsretros as $projetossprintsretro): ?>
            <tr>
                <td><?= $this->Number->format($projetossprintsretro->id) ?></td>
                <td><?= $projetossprintsretro->has('projetossprint') ? $this->Html->link($projetossprintsretro->projetossprint->id, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsretro->projetossprint->id]) : '' ?></td>
                <td><?= $projetossprintsretro->has('pareto') ? $this->Html->link($projetossprintsretro->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetossprintsretro->pareto->id]) : '' ?></td>
                <td><?= h($projetossprintsretro->descricao) ?></td>
                <td><?= h($projetossprintsretro->observacao) ?></td>
                <td><?= h($projetossprintsretro->referenciaboard) ?></td>
                <td><?= $projetossprintsretro->has('statusfuncional') ? $this->Html->link($projetossprintsretro->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetossprintsretro->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetossprintsretro->created) ?></td>
                <td><?= h($projetossprintsretro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprintsretro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprintsretro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetossprintsretro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretro->id)]) ?>
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
