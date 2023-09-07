<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaspareto[]|\Cake\Collection\CollectionInterface $projetosentregasparetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregaspareto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasparetos index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasparetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsabilidade_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasparetos as $projetosentregaspareto): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregaspareto->id) ?></td>
                <td><?= $projetosentregaspareto->has('projetosprodutosentrega') ? $this->Html->link($projetosentregaspareto->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregaspareto->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= $projetosentregaspareto->has('pareto') ? $this->Html->link($projetosentregaspareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetosentregaspareto->pareto->id]) : '' ?></td>
                <td><?= h($projetosentregaspareto->descricao) ?></td>
                <td><?= h($projetosentregaspareto->created) ?></td>
                <td><?= h($projetosentregaspareto->modified) ?></td>
                <td><?= $projetosentregaspareto->has('motivo') ? $this->Html->link($projetosentregaspareto->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregaspareto->motivo->id]) : '' ?></td>
                <td><?= $projetosentregaspareto->has('responsabilidade') ? $this->Html->link($projetosentregaspareto->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $projetosentregaspareto->responsabilidade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregaspareto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregaspareto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregaspareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregaspareto->id)]) ?>
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
