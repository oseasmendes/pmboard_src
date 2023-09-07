<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisitostipo[]|\Cake\Collection\CollectionInterface $requisitostipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Requisitostipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisitostipos index large-9 medium-8 columns content">
    <h3><?= __('Requisitostipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisitostipos as $requisitostipo): ?>
            <tr>
                <td><?= $this->Number->format($requisitostipo->id) ?></td>
                <td><?= h($requisitostipo->descricao) ?></td>
                <td><?= h($requisitostipo->created) ?></td>
                <td><?= h($requisitostipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $requisitostipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requisitostipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requisitostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitostipo->id)]) ?>
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
