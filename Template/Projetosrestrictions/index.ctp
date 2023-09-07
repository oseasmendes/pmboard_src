<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosrestriction[]|\Cake\Collection\CollectionInterface $projetosrestrictions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosrestriction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosrestrictionsfls'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosrestrictionsfl'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosrestrictions index large-9 medium-8 columns content">
    <h3><?= __('Projetosrestrictions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolvidoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planoacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('risco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosrestrictions as $projetosrestriction): ?>
            <tr>
                <td><?= $this->Number->format($projetosrestriction->id) ?></td>
                <td><?= $projetosrestriction->has('projeto') ? $this->Html->link($projetosrestriction->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosrestriction->projeto->id]) : '' ?></td>
                <td><?= h($projetosrestriction->descricao) ?></td>
                <td><?= $projetosrestriction->has('statusfuncional') ? $this->Html->link($projetosrestriction->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosrestriction->statusfuncional->id]) : '' ?></td>
                <td><?= $projetosrestriction->has('consultore') ? $this->Html->link($projetosrestriction->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosrestriction->consultore->id]) : '' ?></td>
                <td><?= h($projetosrestriction->responsavel) ?></td>
                <td><?= h($projetosrestriction->resolvidoem) ?></td>
                <td><?= h($projetosrestriction->planoacao) ?></td>
                <td><?= h($projetosrestriction->ativo) ?></td>
                <td><?= h($projetosrestriction->risco) ?></td>
                <td><?= $this->Number->format($projetosrestriction->flag) ?></td>
                <td><?= h($projetosrestriction->created) ?></td>
                <td><?= h($projetosrestriction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosrestriction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosrestriction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosrestriction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestriction->id)]) ?>
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
