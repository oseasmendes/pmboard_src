<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostep[]|\Cake\Collection\CollectionInterface $sistemaprosteps
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaproactions'), ['controller' => 'Sistemaproactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaproaction'), ['controller' => 'Sistemaproactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprostepsfiles'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostepsfile'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaprosteps index large-9 medium-8 columns content">
    <h3><?= __('Sistemaprosteps') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemaproaction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stepaction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemaprosteps as $sistemaprostep): ?>
            <tr>
                <td><?= $this->Number->format($sistemaprostep->id) ?></td>
                <td><?= $sistemaprostep->has('sistemaproaction') ? $this->Html->link($sistemaprostep->sistemaproaction->id, ['controller' => 'Sistemaproactions', 'action' => 'view', $sistemaprostep->sistemaproaction->id]) : '' ?></td>
                <td><?= $this->Number->format($sistemaprostep->stepaction) ?></td>
                <td><?= h($sistemaprostep->description) ?></td>
                <td><?= $sistemaprostep->has('participante') ? $this->Html->link($sistemaprostep->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $sistemaprostep->participante->id]) : '' ?></td>
                <td><?= $sistemaprostep->has('consultore') ? $this->Html->link($sistemaprostep->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $sistemaprostep->consultore->id]) : '' ?></td>
                <td><?= h($sistemaprostep->created) ?></td>
                <td><?= h($sistemaprostep->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemaprostep->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemaprostep->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemaprostep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprostep->id)]) ?>
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
