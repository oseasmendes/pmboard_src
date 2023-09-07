<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnews[]|\Cake\Collection\CollectionInterface $projetosnews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosnews'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosnews index large-9 medium-8 columns content">
    <h3><?= __('Projetosnews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datalancto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complexidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datacheckin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosnews as $projetosnews): ?>
            <tr>
                <td><?= $this->Number->format($projetosnews->id) ?></td>
                <td><?= $projetosnews->has('projeto') ? $this->Html->link($projetosnews->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosnews->projeto->id]) : '' ?></td>
                <td><?= h($projetosnews->canal) ?></td>
                <td><?= h($projetosnews->referencia) ?></td>
                <td><?= $this->Number->format($projetosnews->prio) ?></td>
                <td><?= h($projetosnews->descricao) ?></td>
                <td><?= h($projetosnews->datalancto) ?></td>
                <td><?= h($projetosnews->requisitante) ?></td>
                <td><?= h($projetosnews->departamento) ?></td>
                <td><?= h($projetosnews->sistema) ?></td>
                <td><?= h($projetosnews->complexidade) ?></td>
                <td><?= h($projetosnews->evento) ?></td>
                <td><?= h($projetosnews->datacheckin) ?></td>
                <td><?= h($projetosnews->created) ?></td>
                <td><?= h($projetosnews->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosnews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosnews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosnews->id)]) ?>
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
