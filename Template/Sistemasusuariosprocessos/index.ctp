<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasusuariosprocesso[]|\Cake\Collection\CollectionInterface $sistemasusuariosprocessos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuariosprocesso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasusuariosprocessos index large-9 medium-8 columns content">
    <h3><?= __('Sistemasusuariosprocessos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasusuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasusuariosprocessos as $sistemasusuariosprocesso): ?>
            <tr>
                <td><?= $this->Number->format($sistemasusuariosprocesso->id) ?></td>
                <td><?= h($sistemasusuariosprocesso->descricao) ?></td>
                <td><?= $sistemasusuariosprocesso->has('sistemasusuario') ? $this->Html->link($sistemasusuariosprocesso->sistemasusuario->nome, ['controller' => 'Sistemasusuarios', 'action' => 'view', $sistemasusuariosprocesso->sistemasusuario->id]) : '' ?></td>
                <td><?= $sistemasusuariosprocesso->has('processo') ? $this->Html->link($sistemasusuariosprocesso->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $sistemasusuariosprocesso->processo->id]) : '' ?></td>
                <td><?= h($sistemasusuariosprocesso->created) ?></td>
                <td><?= h($sistemasusuariosprocesso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasusuariosprocesso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasusuariosprocesso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasusuariosprocesso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuariosprocesso->id)]) ?>
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
