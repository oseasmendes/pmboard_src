<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaschange[]|\Cake\Collection\CollectionInterface $projetosentregaschanges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregaschange'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregaschanges index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregaschanges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasreqsref_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregaschanges as $projetosentregaschange): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregaschange->id) ?></td>
                <td><?= $this->Number->format($projetosentregaschange->projetosentregasreqsref_id) ?></td>
                <td><?= h($projetosentregaschange->descricao) ?></td>
                <td><?= h($projetosentregaschange->data) ?></td>
                <td><?= h($projetosentregaschange->requisitante) ?></td>
                <td><?= h($projetosentregaschange->created) ?></td>
                <td><?= h($projetosentregaschange->modified) ?></td>
                <td><?= $projetosentregaschange->has('motivo') ? $this->Html->link($projetosentregaschange->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregaschange->motivo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregaschange->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregaschange->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregaschange->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregaschange->id)]) ?>
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
