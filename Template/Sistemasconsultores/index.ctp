<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasconsultore[]|\Cake\Collection\CollectionInterface $sistemasconsultores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasconsultore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasconsultores index large-9 medium-8 columns content">
    <h3><?= __('Sistemasconsultores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('knowhow_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('principalfuncao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividadeexecutada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataatividade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alocacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasconsultores as $sistemasconsultore): ?>
            <tr>
                <td><?= $this->Number->format($sistemasconsultore->id) ?></td>
                <td><?= $sistemasconsultore->has('consultore') ? $this->Html->link($sistemasconsultore->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $sistemasconsultore->consultore->id]) : '' ?></td>
                <td><?= $sistemasconsultore->has('knowhow') ? $this->Html->link($sistemasconsultore->knowhow->descricao, ['controller' => 'Knowhows', 'action' => 'view', $sistemasconsultore->knowhow->id]) : '' ?></td>
                <td><?= h($sistemasconsultore->principalfuncao) ?></td>
                <td><?= h($sistemasconsultore->atividadeexecutada) ?></td>
                <td><?= h($sistemasconsultore->dataatividade) ?></td>
                <td><?= h($sistemasconsultore->consultoria) ?></td>
                <td><?= $this->Number->format($sistemasconsultore->alocacao) ?></td>
                <td><?= h($sistemasconsultore->created) ?></td>
                <td><?= h($sistemasconsultore->modified) ?></td>
                <td><?= $sistemasconsultore->has('sistema') ? $this->Html->link($sistemasconsultore->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasconsultore->sistema->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasconsultore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasconsultore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasconsultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasconsultore->id)]) ?>
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
