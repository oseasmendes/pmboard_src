<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosfeedback[]|\Cake\Collection\CollectionInterface $projetosprodutosfeedbacks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feedbacktipos'), ['controller' => 'Feedbacktipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feedbacktipo'), ['controller' => 'Feedbacktipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosfeedbacks index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosfeedbacks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feedbacktipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosfeedbacks as $projetosprodutosfeedback): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosfeedback->id) ?></td>
                <td><?= $projetosprodutosfeedback->has('feedbacktipo') ? $this->Html->link($projetosprodutosfeedback->feedbacktipo->descricao, ['controller' => 'Feedbacktipos', 'action' => 'view', $projetosprodutosfeedback->feedbacktipo->id]) : '' ?></td>
                <td><?= h($projetosprodutosfeedback->descricao) ?></td>
                <td><?= h($projetosprodutosfeedback->created) ?></td>
                <td><?= h($projetosprodutosfeedback->modified) ?></td>
                <td><?= $projetosprodutosfeedback->has('projetosproduto') ? $this->Html->link($projetosprodutosfeedback->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosfeedback->projetosproduto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosfeedback->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosfeedback->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosfeedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfeedback->id)]) ?>
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
