<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupchamado[]|\Cake\Collection\CollectionInterface $fupchamados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fupchamado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupchamados index large-9 medium-8 columns content">
    <h3><?= __('Fupchamados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fupagenda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kanban') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chamadonr') ?></th>
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
            <?php foreach ($fupchamados as $fupchamado): ?>
            <tr>
                <td><?= $this->Number->format($fupchamado->id) ?></td>
                <td><?= $fupchamado->has('fupagenda') ? $this->Html->link($fupchamado->fupagenda->descricao, ['controller' => 'Fupagendas', 'action' => 'view', $fupchamado->fupagenda->id]) : '' ?></td>
                <td><?= h($fupchamado->departamento) ?></td>
                <td><?= h($fupchamado->kanban) ?></td>
                <td><?= h($fupchamado->chamadonr) ?></td>
                <td><?= h($fupchamado->titulo) ?></td>
                <td><?= $this->Number->format($fupchamado->prio) ?></td>
                <td><?= h($fupchamado->requisitante) ?></td>
                <td><?= h($fupchamado->statusdetalhado) ?></td>
                <td><?= h($fupchamado->analista) ?></td>
                <td><?= h($fupchamado->comentario) ?></td>
                <td><?= h($fupchamado->lastupdate) ?></td>
                <td><?= h($fupchamado->created) ?></td>
                <td><?= h($fupchamado->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupchamado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupchamado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupchamado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupchamado->id)]) ?>
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
