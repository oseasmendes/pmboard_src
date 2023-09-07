<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlagente[]|\Cake\Collection\CollectionInterface $esupportsetlagentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Esupportsetlagente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlagentes index large-9 medium-8 columns content">
    <h3><?= __('Esupportsetlagentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($esupportsetlagentes as $esupportsetlagente): ?>
            <tr>
                <td><?= $this->Number->format($esupportsetlagente->id) ?></td>
                <td><?= h($esupportsetlagente->canal) ?></td>
                <td><?= h($esupportsetlagente->descricao) ?></td>
                <td><?= h($esupportsetlagente->referencia) ?></td>
                <td><?= $esupportsetlagente->has('consultore') ? $this->Html->link($esupportsetlagente->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $esupportsetlagente->consultore->id]) : '' ?></td>
                <td><?= h($esupportsetlagente->ativo) ?></td>
                <td><?= h($esupportsetlagente->created) ?></td>
                <td><?= h($esupportsetlagente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $esupportsetlagente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $esupportsetlagente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $esupportsetlagente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlagente->id)]) ?>
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
