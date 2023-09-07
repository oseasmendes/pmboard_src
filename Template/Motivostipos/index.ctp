<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motivostipo[]|\Cake\Collection\CollectionInterface $motivostipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Motivostipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motivostipos index large-9 medium-8 columns content">
    <h3><?= __('Motivostipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motivostipos as $motivostipo): ?>
            <tr>
                <td><?= $this->Number->format($motivostipo->id) ?></td>
                <td><?= h($motivostipo->descricao) ?></td>
                <td><?= h($motivostipo->created) ?></td>
                <td><?= h($motivostipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $motivostipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $motivostipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $motivostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motivostipo->id)]) ?>
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
