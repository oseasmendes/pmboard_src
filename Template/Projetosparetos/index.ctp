<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetospareto[]|\Cake\Collection\CollectionInterface $projetosparetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosparetos index large-9 medium-8 columns content">
    <h3><?= __('Projetosparetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosparetos as $projetospareto): ?>
            <tr>
                <td><?= $this->Number->format($projetospareto->id) ?></td>
                <td><?= $projetospareto->has('projeto') ? $this->Html->link($projetospareto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetospareto->projeto->id]) : '' ?></td>
                <td><?= $projetospareto->has('pareto') ? $this->Html->link($projetospareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetospareto->pareto->id]) : '' ?></td>
                <td><?= h($projetospareto->descricao) ?></td>
                <td><?= h($projetospareto->created) ?></td>
                <td><?= h($projetospareto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetospareto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetospareto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetospareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetospareto->id)]) ?>
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
