<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasnota[]|\Cake\Collection\CollectionInterface $projetosentregasnotas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasnota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasnotas index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasnotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notatipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasnotas as $projetosentregasnota): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasnota->id) ?></td>
                <td><?= $projetosentregasnota->has('projetosprodutosentrega') ? $this->Html->link($projetosentregasnota->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregasnota->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= $projetosentregasnota->has('notatipo') ? $this->Html->link($projetosentregasnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosentregasnota->notatipo->id]) : '' ?></td>
                <td><?= h($projetosentregasnota->descricao) ?></td>
                <td><?= h($projetosentregasnota->created) ?></td>
                <td><?= h($projetosentregasnota->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasnota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasnota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasnota->id)]) ?>
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
