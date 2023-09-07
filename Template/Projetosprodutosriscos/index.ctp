<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrisco[]|\Cake\Collection\CollectionInterface $projetosprodutosriscos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicabilidades'), ['controller' => 'Aplicabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicabilidade'), ['controller' => 'Aplicabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscosimpactos'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosimpacto'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosriscos index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosriscos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('risco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aplicabilidade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('probabilidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoprevistoimpacto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoasafetadas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estimativafinanceiradorisco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosriscos as $projetosprodutosrisco): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosrisco->id) ?></td>
                <td><?= $projetosprodutosrisco->has('projetosproduto') ? $this->Html->link($projetosprodutosrisco->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosrisco->projetosproduto->id]) : '' ?></td>
                <td><?= $projetosprodutosrisco->has('risco') ? $this->Html->link($projetosprodutosrisco->risco->descricao, ['controller' => 'Riscos', 'action' => 'view', $projetosprodutosrisco->risco->id]) : '' ?></td>
                <td><?= $projetosprodutosrisco->has('aplicabilidade') ? $this->Html->link($projetosprodutosrisco->aplicabilidade->descricao, ['controller' => 'Aplicabilidades', 'action' => 'view', $projetosprodutosrisco->aplicabilidade->id]) : '' ?></td>
                <td><?= h($projetosprodutosrisco->nivel) ?></td>
                <td><?= $this->Number->format($projetosprodutosrisco->probabilidade) ?></td>
                <td><?= $this->Number->format($projetosprodutosrisco->tempoprevistoimpacto) ?></td>
                <td><?= $this->Number->format($projetosprodutosrisco->pessoasafetadas) ?></td>
                <td><?= $this->Number->format($projetosprodutosrisco->estimativafinanceiradorisco) ?></td>
                <td><?= h($projetosprodutosrisco->created) ?></td>
                <td><?= h($projetosprodutosrisco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosrisco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosrisco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosrisco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosrisco->id)]) ?>
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
