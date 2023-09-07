<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgintegration[]|\Cake\Collection\CollectionInterface $sistemascfgintegrations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgintegrations index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgintegrations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnologia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('integration_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgintegrations as $sistemascfgintegration): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgintegration->id) ?></td>
                <td><?= $sistemascfgintegration->has('tecnologia') ? $this->Html->link($sistemascfgintegration->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $sistemascfgintegration->tecnologia->id]) : '' ?></td>
                <td><?= h($sistemascfgintegration->referencia) ?></td>
                <td><?= h($sistemascfgintegration->descricao) ?></td>
                <td><?= h($sistemascfgintegration->contato) ?></td>
                <td><?= h($sistemascfgintegration->created) ?></td>
                <td><?= h($sistemascfgintegration->modified) ?></td>
                <td><?= $sistemascfgintegration->has('sistema') ? $this->Html->link($sistemascfgintegration->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgintegration->sistema->id]) : '' ?></td>
                <td><?= $sistemascfgintegration->has('integration') ? $this->Html->link($sistemascfgintegration->integration->descricao, ['controller' => 'Integrations', 'action' => 'view', $sistemascfgintegration->integration->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgintegration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgintegration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgintegration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgintegration->id)]) ?>
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
