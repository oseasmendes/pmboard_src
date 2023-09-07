<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaproaction[]|\Cake\Collection\CollectionInterface $sistemaproactions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemaproaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasprocessos'), ['controller' => 'Sistemasprocessos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasprocesso'), ['controller' => 'Sistemasprocessos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaproactions index large-9 medium-8 columns content">
    <h3><?= __('Sistemaproactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasprocesso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemaproactions as $sistemaproaction): ?>
            <tr>
                <td><?= $this->Number->format($sistemaproaction->id) ?></td>
                <td><?= $sistemaproaction->has('sistemasprocesso') ? $this->Html->link($sistemaproaction->sistemasprocesso->id, ['controller' => 'Sistemasprocessos', 'action' => 'view', $sistemaproaction->sistemasprocesso->id]) : '' ?></td>
                <td><?= $sistemaproaction->has('evento') ? $this->Html->link($sistemaproaction->evento->descricao, ['controller' => 'Eventos', 'action' => 'view', $sistemaproaction->evento->id]) : '' ?></td>
                <td><?= h($sistemaproaction->descricao) ?></td>
                <td><?= h($sistemaproaction->created) ?></td>
                <td><?= h($sistemaproaction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemaproaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemaproaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemaproaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaproaction->id)]) ?>
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
