<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprocesso[]|\Cake\Collection\CollectionInterface $sistemasprocessos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasprocesso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasprocessos index large-9 medium-8 columns content">
    <h3><?= __('Sistemasprocessos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descontinuadoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descontinuadomotivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasprocessos as $sistemasprocesso): ?>
            <tr>
                <td><?= $this->Number->format($sistemasprocesso->id) ?></td>
                <td><?= h($sistemasprocesso->descricao) ?></td>
                <td><?= $sistemasprocesso->has('sistema') ? $this->Html->link($sistemasprocesso->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasprocesso->sistema->id]) : '' ?></td>
                <td><?= $sistemasprocesso->has('processo') ? $this->Html->link($sistemasprocesso->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $sistemasprocesso->processo->id]) : '' ?></td>
                <td><?= h($sistemasprocesso->ativo) ?></td>
                <td><?= h($sistemasprocesso->descontinuadoem) ?></td>
                <td><?= h($sistemasprocesso->descontinuadomotivo) ?></td>
                <td><?= h($sistemasprocesso->created) ?></td>
                <td><?= h($sistemasprocesso->modified) ?></td>
                <td><?= h($sistemasprocesso->motivo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasprocesso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasprocesso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasprocesso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprocesso->id)]) ?>
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
