<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motivo[]|\Cake\Collection\CollectionInterface $motivos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motivos index large-9 medium-8 columns content">
    <h3><?= __('Motivos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivostipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motivos as $motivo): ?>
            <tr>
                <td><?= $this->Number->format($motivo->id) ?></td>
                <td><?= h($motivo->descricao) ?></td>
                <td><?= $this->Number->format($motivo->motivostipo_id) ?></td>
                <td><?= h($motivo->created) ?></td>
                <td><?= h($motivo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $motivo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $motivo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $motivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motivo->id)]) ?>
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
