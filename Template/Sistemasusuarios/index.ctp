<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasusuario[]|\Cake\Collection\CollectionInterface $sistemasusuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasusuarios index large-9 medium-8 columns content">
    <h3><?= __('Sistemasusuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ramal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsabilidade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statususuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('knowhow_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasusuarios as $sistemasusuario): ?>
            <tr>
                <td><?= $this->Number->format($sistemasusuario->id) ?></td>
                <td><?= $sistemasusuario->has('sistema') ? $this->Html->link($sistemasusuario->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasusuario->sistema->id]) : '' ?></td>
                <td><?= $sistemasusuario->has('usuario') ? $this->Html->link($sistemasusuario->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $sistemasusuario->usuario->id]) : '' ?></td>
                <td><?= h($sistemasusuario->nome) ?></td>
                <td><?= h($sistemasusuario->ramal) ?></td>
                <td><?= $sistemasusuario->has('responsabilidade') ? $this->Html->link($sistemasusuario->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $sistemasusuario->responsabilidade->id]) : '' ?></td>
                <td><?= h($sistemasusuario->empresa) ?></td>
                <td><?= h($sistemasusuario->created) ?></td>
                <td><?= h($sistemasusuario->modified) ?></td>
                <td><?= h($sistemasusuario->statususuario) ?></td>
                <td><?= $sistemasusuario->has('knowhow') ? $this->Html->link($sistemasusuario->knowhow->descricao, ['controller' => 'Knowhows', 'action' => 'view', $sistemasusuario->knowhow->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasusuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasusuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasusuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuario->id)]) ?>
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
