<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrisco[]|\Cake\Collection\CollectionInterface $sistemasriscos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicabilidades'), ['controller' => 'Aplicabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicabilidade'), ['controller' => 'Aplicabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasriscos index large-9 medium-8 columns content">
    <h3><?= __('Sistemasriscos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
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
            <?php foreach ($sistemasriscos as $sistemasrisco): ?>
            <tr>
                <td><?= $this->Number->format($sistemasrisco->id) ?></td>
                <td><?= $sistemasrisco->has('sistema') ? $this->Html->link($sistemasrisco->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasrisco->sistema->id]) : '' ?></td>
                <td><?= $sistemasrisco->has('risco') ? $this->Html->link($sistemasrisco->risco->descricao, ['controller' => 'Riscos', 'action' => 'view', $sistemasrisco->risco->id]) : '' ?></td>
                <td><?= $sistemasrisco->has('aplicabilidade') ? $this->Html->link($sistemasrisco->aplicabilidade->descricao, ['controller' => 'Aplicabilidades', 'action' => 'view', $sistemasrisco->aplicabilidade->id]) : '' ?></td>
                <td><?= h($sistemasrisco->nivel) ?></td>
                <td><?= $this->Number->format($sistemasrisco->probabilidade) ?></td>
                <td><?= $this->Number->format($sistemasrisco->tempoprevistoimpacto) ?></td>
                <td><?= $this->Number->format($sistemasrisco->pessoasafetadas) ?></td>
                <td><?= $this->Number->format($sistemasrisco->estimativafinanceiradorisco) ?></td>
                <td><?= h($sistemasrisco->created) ?></td>
                <td><?= h($sistemasrisco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasrisco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasrisco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasrisco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasrisco->id)]) ?>
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
