<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Riscoscategoria[]|\Cake\Collection\CollectionInterface $riscoscategorias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Riscoscategoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riscoscategorias index large-9 medium-8 columns content">
    <h3><?= __('Riscoscategorias') ?></h3>
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
            <?php foreach ($riscoscategorias as $riscoscategoria): ?>
            <tr>
                <td><?= $this->Number->format($riscoscategoria->id) ?></td>
                <td><?= h($riscoscategoria->descricao) ?></td>
                <td><?= h($riscoscategoria->created) ?></td>
                <td><?= h($riscoscategoria->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $riscoscategoria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $riscoscategoria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $riscoscategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $riscoscategoria->id)]) ?>
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
