<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsref[]|\Cake\Collection\CollectionInterface $projetosentregasreqsrefs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqs'), ['controller' => 'Projetosentregasreqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreq'), ['controller' => 'Projetosentregasreqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsimg'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefs index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasreqsrefs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasreq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisitostipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precedente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('risco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasreqsrefs as $projetosentregasreqsref): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasreqsref->id) ?></td>
                <td><?= $projetosentregasreqsref->has('projetosentregasreq') ? $this->Html->link($projetosentregasreqsref->projetosentregasreq->id, ['controller' => 'Projetosentregasreqs', 'action' => 'view', $projetosentregasreqsref->projetosentregasreq->id]) : '' ?></td>
                <td><?= $this->Number->format($projetosentregasreqsref->requisitostipo_id) ?></td>
                <td><?= h($projetosentregasreqsref->referencia) ?></td>
                <td><?= h($projetosentregasreqsref->descricao) ?></td>
                <td><?= $this->Number->format($projetosentregasreqsref->precedente) ?></td>
                <td><?= h($projetosentregasreqsref->risco) ?></td>
                <td><?= h($projetosentregasreqsref->teste) ?></td>
                <td><?= h($projetosentregasreqsref->cancelled) ?></td>
                <td><?= $projetosentregasreqsref->has('statusfuncional') ? $this->Html->link($projetosentregasreqsref->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosentregasreqsref->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosentregasreqsref->created) ?></td>
                <td><?= h($projetosentregasreqsref->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasreqsref->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasreqsref->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasreqsref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsref->id)]) ?>
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
