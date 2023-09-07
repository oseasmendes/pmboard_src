<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdbdet[]|\Cake\Collection\CollectionInterface $sistemascfgdbdets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdbdet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgdbdets index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgdbdets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemascfgdb_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtetabelas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtecolunas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qteregistros') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtestoreprocedures') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtetriggers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('espacoemdisco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavelinventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgdbdets as $sistemascfgdbdet): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgdbdet->id) ?></td>
                <td><?= $sistemascfgdbdet->has('sistemascfgdb') ? $this->Html->link($sistemascfgdbdet->sistemascfgdb->id, ['controller' => 'Sistemascfgdbs', 'action' => 'view', $sistemascfgdbdet->sistemascfgdb->id]) : '' ?></td>
                <td><?= h($sistemascfgdbdet->datainventario) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->tamanho) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->qtetabelas) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->qtecolunas) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->qteregistros) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->qtestoreprocedures) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->qtetriggers) ?></td>
                <td><?= $this->Number->format($sistemascfgdbdet->espacoemdisco) ?></td>
                <td><?= h($sistemascfgdbdet->responsavelinventario) ?></td>
                <td><?= h($sistemascfgdbdet->created) ?></td>
                <td><?= h($sistemascfgdbdet->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgdbdet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgdbdet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgdbdet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdbdet->id)]) ?>
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
