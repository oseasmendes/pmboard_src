<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgfront[]|\Cake\Collection\CollectionInterface $sistemascfgfronts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgfronts index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgfronts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnologia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('percentual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultimaatualizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivoatualizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgfronts as $sistemascfgfront): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgfront->id) ?></td>
                <td><?= $sistemascfgfront->has('tecnologia') ? $this->Html->link($sistemascfgfront->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $sistemascfgfront->tecnologia->id]) : '' ?></td>
                <td><?= h($sistemascfgfront->descricao) ?></td>
                <td><?= $this->Number->format($sistemascfgfront->percentual) ?></td>
                <td><?= h($sistemascfgfront->versao) ?></td>
                <td><?= h($sistemascfgfront->ultimaatualizacao) ?></td>
                <td><?= h($sistemascfgfront->motivoatualizacao) ?></td>
                <td><?= h($sistemascfgfront->created) ?></td>
                <td><?= h($sistemascfgfront->modified) ?></td>
                <td><?= $sistemascfgfront->has('sistema') ? $this->Html->link($sistemascfgfront->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgfront->sistema->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgfront->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgfront->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgfront->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgfront->id)]) ?>
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
