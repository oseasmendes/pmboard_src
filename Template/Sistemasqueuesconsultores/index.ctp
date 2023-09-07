<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasqueuesconsultore[]|\Cake\Collection\CollectionInterface $sistemasqueuesconsultores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasqueuesconsultore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasqueues'), ['controller' => 'Sistemasqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasqueue'), ['controller' => 'Sistemasqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasqueuesconsultores index large-9 medium-8 columns content">
    <h3><?= __('Sistemasqueuesconsultores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasqueue_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasqueuesconsultores as $sistemasqueuesconsultore): ?>
            <tr>
                <td><?= $this->Number->format($sistemasqueuesconsultore->id) ?></td>
                <td><?= h($sistemasqueuesconsultore->desricao) ?></td>
                <td><?= $sistemasqueuesconsultore->has('sistemasqueue') ? $this->Html->link($sistemasqueuesconsultore->sistemasqueue->descricao, ['controller' => 'Sistemasqueues', 'action' => 'view', $sistemasqueuesconsultore->sistemasqueue->id]) : '' ?></td>
                <td><?= $sistemasqueuesconsultore->has('consultore') ? $this->Html->link($sistemasqueuesconsultore->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $sistemasqueuesconsultore->consultore->id]) : '' ?></td>
                <td><?= h($sistemasqueuesconsultore->ativo) ?></td>
                <td><?= h($sistemasqueuesconsultore->created) ?></td>
                <td><?= h($sistemasqueuesconsultore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasqueuesconsultore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasqueuesconsultore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasqueuesconsultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasqueuesconsultore->id)]) ?>
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
