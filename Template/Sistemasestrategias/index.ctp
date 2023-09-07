<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasestrategia[]|\Cake\Collection\CollectionInterface $sistemasestrategias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasestrategia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasestrategias index large-9 medium-8 columns content">
    <h3><?= __('Sistemasestrategias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estrategia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasestrategias as $sistemasestrategia): ?>
            <tr>
                <td><?= $this->Number->format($sistemasestrategia->id) ?></td>
                <td><?= $this->Number->format($sistemasestrategia->estrategia_id) ?></td>
                <td><?= h($sistemasestrategia->descricao) ?></td>
                <td><?= h($sistemasestrategia->created) ?></td>
                <td><?= h($sistemasestrategia->modified) ?></td>
                <td><?= h($sistemasestrategia->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasestrategia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasestrategia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasestrategia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasestrategia->id)]) ?>
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
