<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosstatus[]|\Cake\Collection\CollectionInterface $projetosstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosstatus index large-9 medium-8 columns content">
    <h3><?= __('Projetosstatus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsabilidade_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosstatus as $projetosstatus): ?>
            <tr>
                <td><?= $this->Number->format($projetosstatus->id) ?></td>
                <td><?= $projetosstatus->has('projeto') ? $this->Html->link($projetosstatus->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosstatus->projeto->id]) : '' ?></td>
                <td><?= $projetosstatus->has('statusfuncional') ? $this->Html->link($projetosstatus->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosstatus->statusfuncional->id]) : '' ?></td>
                <td><?= $projetosstatus->has('motivo') ? $this->Html->link($projetosstatus->motivo->id, ['controller' => 'Motivos', 'action' => 'view', $projetosstatus->motivo->id]) : '' ?></td>
                <td><?= h($projetosstatus->descricao) ?></td>
                <td><?= h($projetosstatus->created) ?></td>
                <td><?= h($projetosstatus->modified) ?></td>
                <td><?= $projetosstatus->has('responsabilidade') ? $this->Html->link($projetosstatus->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $projetosstatus->responsabilidade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosstatus->id)]) ?>
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
