<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupinprogre[]|\Cake\Collection\CollectionInterface $fupinprogres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fupinprogre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupinprogres index large-9 medium-8 columns content">
    <h3><?= __('Fupinprogres') ?></h3>
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
            <?php foreach ($fupinprogres as $fupinprogre): ?>
            <tr>
                <td><?= $this->Number->format($fupinprogre->id) ?></td>
                <td><?= $fupinprogre->has('fupagenda') ? $this->Html->link($fupinprogre->fupagenda->id, ['controller' => 'Fupagendas', 'action' => 'view', $fupinprogre->fupagenda->id]) : '' ?></td>
                <td><?= h($fupinprogre->departamento) ?></td>
                <td><?= h($fupinprogre->kanban) ?></td>
                <td><?= h($fupinprogre->esupportid) ?></td>
                <td><?= h($fupinprogre->titulo) ?></td>
                <td><?= $this->Number->format($fupinprogre->prio) ?></td>
                <td><?= h($fupinprogre->requisitante) ?></td>
                <td><?= h($fupinprogre->statusdetalhado) ?></td>
                <td><?= h($fupinprogre->analista) ?></td>
                <td><?= h($fupinprogre->comentario) ?></td>
                <td><?= h($fupinprogre->lastupdate) ?></td>
                <td><?= h($fupinprogre->created) ?></td>
                <td><?= h($fupinprogre->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupinprogre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupinprogre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupinprogre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupinprogre->id)]) ?>
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
