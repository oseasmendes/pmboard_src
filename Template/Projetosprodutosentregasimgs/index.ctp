<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasimg[]|\Cake\Collection\CollectionInterface $projetosprodutosentregasimgs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasimg'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregasimgs index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosentregasimgs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginalid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagempath') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosentregasimgs as $projetosprodutosentregasimg): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosentregasimg->id) ?></td>
                <td><?= $projetosprodutosentregasimg->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasimg->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasimg->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($projetosprodutosentregasimg->referencia) ?></td>
                <td><?= h($projetosprodutosentregasimg->descricao) ?></td>
                <td><?= h($projetosprodutosentregasimg->imagemoriginal) ?></td>
                <td><?= h($projetosprodutosentregasimg->url) ?></td>
                <td><?= $this->Number->format($projetosprodutosentregasimg->imagemoriginalid) ?></td>
                <td><?= h($projetosprodutosentregasimg->imagempath) ?></td>
                <td><?= h($projetosprodutosentregasimg->created) ?></td>
                <td><?= h($projetosprodutosentregasimg->modified) ?></td>
                <td><?= $this->Number->format($projetosprodutosentregasimg->ordem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosentregasimg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosentregasimg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosentregasimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasimg->id)]) ?>
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
