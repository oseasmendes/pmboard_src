<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupdeployed[]|\Cake\Collection\CollectionInterface $fupdeployed
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fupdeployed'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupdeployed index large-9 medium-8 columns content">
    <h3><?= __('Fupdeployed') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fupagenda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kanban') ?></th>
                <th scope="col"><?= $this->Paginator->sort('esupportid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusdetalhado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('analista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comentario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastupdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fupdeployed as $fupdeployed): ?>
            <tr>
                <td><?= $this->Number->format($fupdeployed->id) ?></td>
                <td><?= $fupdeployed->has('fupagenda') ? $this->Html->link($fupdeployed->fupagenda->id, ['controller' => 'Fupagendas', 'action' => 'view', $fupdeployed->fupagenda->id]) : '' ?></td>
                <td><?= h($fupdeployed->departamento) ?></td>
                <td><?= h($fupdeployed->kanban) ?></td>
                <td><?= h($fupdeployed->esupportid) ?></td>
                <td><?= h($fupdeployed->titulo) ?></td>
                <td><?= $this->Number->format($fupdeployed->prio) ?></td>
                <td><?= h($fupdeployed->requisitante) ?></td>
                <td><?= h($fupdeployed->statusdetalhado) ?></td>
                <td><?= h($fupdeployed->analista) ?></td>
                <td><?= h($fupdeployed->comentario) ?></td>
                <td><?= h($fupdeployed->lastupdate) ?></td>
                <td><?= h($fupdeployed->created) ?></td>
                <td><?= h($fupdeployed->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupdeployed->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupdeployed->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupdeployed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupdeployed->id)]) ?>
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
