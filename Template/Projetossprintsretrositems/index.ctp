<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretrositem[]|\Cake\Collection\CollectionInterface $projetossprintsretrositems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretros'), ['controller' => 'Projetossprintsretros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretro'), ['controller' => 'Projetossprintsretros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsretrositems index large-9 medium-8 columns content">
    <h3><?= __('Projetossprintsretrositems') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprintsretro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('geraplanoacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referenciaoriginal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numerocard') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprintsretrositems as $projetossprintsretrositem): ?>
            <tr>
                <td><?= $this->Number->format($projetossprintsretrositem->id) ?></td>
                <td><?= $projetossprintsretrositem->has('projetossprintsretro') ? $this->Html->link($projetossprintsretrositem->projetossprintsretro->id, ['controller' => 'Projetossprintsretros', 'action' => 'view', $projetossprintsretrositem->projetossprintsretro->id]) : '' ?></td>
                <td><?= $projetossprintsretrositem->has('pareto') ? $this->Html->link($projetossprintsretrositem->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetossprintsretrositem->pareto->id]) : '' ?></td>
                <td><?= h($projetossprintsretrositem->descricao) ?></td>
                <td><?= h($projetossprintsretrositem->geraplanoacao) ?></td>
                <td><?= h($projetossprintsretrositem->observacao) ?></td>
                <td><?= h($projetossprintsretrositem->classificacao) ?></td>
                <td><?= h($projetossprintsretrositem->referenciaoriginal) ?></td>
                <td><?= h($projetossprintsretrositem->created) ?></td>
                <td><?= h($projetossprintsretrositem->modified) ?></td>
                <td><?= $this->Number->format($projetossprintsretrositem->numerocard) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprintsretrositem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprintsretrositem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetossprintsretrositem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrositem->id)]) ?>
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
