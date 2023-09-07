<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasencerramento[]|\Cake\Collection\CollectionInterface $projetosentregasencerramentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasencerramento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['controller' => 'Solucoesaplicadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solucoesaplicada'), ['controller' => 'Solucoesaplicadas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqs'), ['controller' => 'Sistemasfaqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaq'), ['controller' => 'Sistemasfaqs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasencerramentos index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasencerramentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solucoesaplicada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasfaq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasencerramentos as $projetosentregasencerramento): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasencerramento->id) ?></td>
                <td><?= $projetosentregasencerramento->has('projetosprodutosentrega') ? $this->Html->link($projetosentregasencerramento->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregasencerramento->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= $projetosentregasencerramento->has('solucoesaplicada') ? $this->Html->link($projetosentregasencerramento->solucoesaplicada->descricao, ['controller' => 'Solucoesaplicadas', 'action' => 'view', $projetosentregasencerramento->solucoesaplicada->id]) : '' ?></td>
                <td><?= h($projetosentregasencerramento->data) ?></td>
                <td><?= h($projetosentregasencerramento->descricao) ?></td>
                <td><?= $projetosentregasencerramento->has('consultore') ? $this->Html->link($projetosentregasencerramento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosentregasencerramento->consultore->id]) : '' ?></td>
                <td><?= $projetosentregasencerramento->has('sistemasfaq') ? $this->Html->link($projetosentregasencerramento->sistemasfaq->Descricao, ['controller' => 'Sistemasfaqs', 'action' => 'view', $projetosentregasencerramento->sistemasfaq->id]) : '' ?></td>
                <td><?= h($projetosentregasencerramento->created) ?></td>
                <td><?= h($projetosentregasencerramento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasencerramento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasencerramento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasencerramento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasencerramento->id)]) ?>
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
