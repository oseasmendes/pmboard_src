<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasopenpoint[]|\Cake\Collection\CollectionInterface $projetosentregasopenpoints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasopenpoint'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasopenpoints index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasopenpoints') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasreqsref_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planoacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planodeacaodescricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasopenpoints as $projetosentregasopenpoint): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasopenpoint->id) ?></td>
                <td><?= $this->Number->format($projetosentregasopenpoint->projetosentregasreqsref_id) ?></td>
                <td><?= h($projetosentregasopenpoint->descricao) ?></td>
                <td><?= h($projetosentregasopenpoint->data) ?></td>
                <td><?= $projetosentregasopenpoint->has('motivo') ? $this->Html->link($projetosentregasopenpoint->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregasopenpoint->motivo->id]) : '' ?></td>
                <td><?= h($projetosentregasopenpoint->planoacao) ?></td>
                <td><?= h($projetosentregasopenpoint->planodeacaodescricao) ?></td>
                <td><?= h($projetosentregasopenpoint->created) ?></td>
                <td><?= h($projetosentregasopenpoint->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasopenpoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasopenpoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasopenpoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasopenpoint->id)]) ?>
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
