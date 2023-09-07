<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pareto[]|\Cake\Collection\CollectionInterface $paretos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretosmestres'), ['controller' => 'Paretosmestres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paretosmestre'), ['controller' => 'Paretosmestres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasparetos'), ['controller' => 'Projetosentregasparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregaspareto'), ['controller' => 'Projetosentregasparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List View Kanbanentregas'), ['controller' => 'ViewKanbanentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New View Kanbanentrega'), ['controller' => 'ViewKanbanentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paretos index large-9 medium-8 columns content">
    <h3><?= __('Paretos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kanban') ?></th>             
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paretosmestre_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paretos as $pareto): ?>
            <tr>
                <td><?= $this->Number->format($pareto->id) ?></td>
                <td><?= h($pareto->Kanban) ?></td>                
                <td><?= h($pareto->created) ?></td>
                <td><?= h($pareto->modified) ?></td>
                <td><?= $pareto->has('paretosmestre') ? $this->Html->link($pareto->paretosmestre->descricao, ['controller' => 'Paretosmestres', 'action' => 'view', $pareto->paretosmestre->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pareto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pareto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pareto->id)]) ?>
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
