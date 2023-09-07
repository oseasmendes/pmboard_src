<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupnotstarted[]|\Cake\Collection\CollectionInterface $fupnotstarted
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fupnotstarted'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupnotstarted index large-9 medium-8 columns content">
    <h3><?= __('Fupnotstarted') ?></h3>
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
            <?php foreach ($fupnotstarted as $fupnotstarted): ?>
            <tr>
                <td><?= $this->Number->format($fupnotstarted->id) ?></td>
                <td><?= $fupnotstarted->has('fupagenda') ? $this->Html->link($fupnotstarted->fupagenda->id, ['controller' => 'Fupagendas', 'action' => 'view', $fupnotstarted->fupagenda->id]) : '' ?></td>
                <td><?= h($fupnotstarted->departamento) ?></td>
                <td><?= h($fupnotstarted->kanban) ?></td>
                <td><?= h($fupnotstarted->esupportid) ?></td>
                <td><?= h($fupnotstarted->titulo) ?></td>
                <td><?= $this->Number->format($fupnotstarted->prio) ?></td>
                <td><?= h($fupnotstarted->requisitante) ?></td>
                <td><?= h($fupnotstarted->statusdetalhado) ?></td>
                <td><?= h($fupnotstarted->analista) ?></td>
                <td><?= h($fupnotstarted->comentario) ?></td>
                <td><?= h($fupnotstarted->lastupdate) ?></td>
                <td><?= h($fupnotstarted->created) ?></td>
                <td><?= h($fupnotstarted->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupnotstarted->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupnotstarted->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupnotstarted->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupnotstarted->id)]) ?>
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
