<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoslearnedlesson[]|\Cake\Collection\CollectionInterface $projetoslearnedlessons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetoslearnedlesson'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aproaches'), ['controller' => 'Aproaches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aproach'), ['controller' => 'Aproaches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Severidades'), ['controller' => 'Severidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Severidade'), ['controller' => 'Severidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoslearnedlessons index large-9 medium-8 columns content">
    <h3><?= __('Projetoslearnedlessons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aproach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('severidade_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetoslearnedlessons as $projetoslearnedlesson): ?>
            <tr>
                <td><?= $this->Number->format($projetoslearnedlesson->id) ?></td>
                <td><?= $projetoslearnedlesson->has('projeto') ? $this->Html->link($projetoslearnedlesson->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetoslearnedlesson->projeto->id]) : '' ?></td>
                <td><?= $projetoslearnedlesson->has('aproach') ? $this->Html->link($projetoslearnedlesson->aproach->descricao, ['controller' => 'Aproaches', 'action' => 'view', $projetoslearnedlesson->aproach->id]) : '' ?></td>
                <td><?= h($projetoslearnedlesson->resumo) ?></td>
                <td><?= h($projetoslearnedlesson->created) ?></td>
                <td><?= h($projetoslearnedlesson->modified) ?></td>
                <td><?= $projetoslearnedlesson->has('severidade') ? $this->Html->link($projetoslearnedlesson->severidade->descricao, ['controller' => 'Severidades', 'action' => 'view', $projetoslearnedlesson->severidade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetoslearnedlesson->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetoslearnedlesson->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetoslearnedlesson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoslearnedlesson->id)]) ?>
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
