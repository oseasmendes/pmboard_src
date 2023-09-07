<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasdoc[]|\Cake\Collection\CollectionInterface $sistemasdocs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documentos'), ['controller' => 'Documentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documento'), ['controller' => 'Documentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasdocs index large-9 medium-8 columns content">
    <h3><?= __('Sistemasdocs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criadoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atualizadoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documentonome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasdocs as $sistemasdoc): ?>
            <tr>
                <td><?= $this->Number->format($sistemasdoc->id) ?></td>
                <td><?= $sistemasdoc->has('sistema') ? $this->Html->link($sistemasdoc->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasdoc->sistema->id]) : '' ?></td>
                <td><?= $sistemasdoc->has('documento') ? $this->Html->link($sistemasdoc->documento->descricao, ['controller' => 'Documentos', 'action' => 'view', $sistemasdoc->documento->id]) : '' ?></td>
                <td><?= h($sistemasdoc->criadoem) ?></td>
                <td><?= h($sistemasdoc->atualizadoem) ?></td>
                <td><?= h($sistemasdoc->documentonome) ?></td>
                <td><?= h($sistemasdoc->created) ?></td>
                <td><?= h($sistemasdoc->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasdoc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasdoc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasdoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdoc->id)]) ?>
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
