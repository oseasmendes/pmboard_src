<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centrocusto[]|\Cake\Collection\CollectionInterface $centrocustos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Centrocusto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostas'), ['controller' => 'Propostas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposta'), ['controller' => 'Propostas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centrocustos index large-9 medium-8 columns content">
    <h3><?= __('Centrocustos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigoexterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centrocustos as $centrocusto): ?>
            <tr>
                <td><?= $this->Number->format($centrocusto->id) ?></td>
                <td><?= h($centrocusto->descricao) ?></td>
                <td><?= h($centrocusto->codigoexterno) ?></td>
                <td><?= h($centrocusto->created) ?></td>
                <td><?= h($centrocusto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $centrocusto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centrocusto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centrocusto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centrocusto->id)]) ?>
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
