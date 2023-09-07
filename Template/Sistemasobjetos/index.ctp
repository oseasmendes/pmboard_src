<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasobjeto[]|\Cake\Collection\CollectionInterface $sistemasobjetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasobjeto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsobjs'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsobj'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasobjetos index large-9 medium-8 columns content">
    <h3><?= __('Sistemasobjetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('objetotipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastversion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('analisepor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desenvolvidoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desenvolvidopor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasobjetos as $sistemasobjeto): ?>
            <tr>
                <td><?= $this->Number->format($sistemasobjeto->id) ?></td>
                <td><?= $sistemasobjeto->has('sistema') ? $this->Html->link($sistemasobjeto->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasobjeto->sistema->id]) : '' ?></td>
                <td><?= h($sistemasobjeto->nome) ?></td>
                <td><?= h($sistemasobjeto->descricao) ?></td>
                <td><?= h($sistemasobjeto->objetotipo) ?></td>
                <td><?= h($sistemasobjeto->lastversion) ?></td>
                <td><?= h($sistemasobjeto->analisepor) ?></td>
                <td><?= h($sistemasobjeto->desenvolvidoem) ?></td>
                <td><?= h($sistemasobjeto->desenvolvidopor) ?></td>
                <td><?= h($sistemasobjeto->created) ?></td>
                <td><?= h($sistemasobjeto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasobjeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasobjeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasobjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasobjeto->id)]) ?>
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
