<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemashistorico[]|\Cake\Collection\CollectionInterface $sistemashistoricos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemashistorico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemashistoricos index large-9 medium-8 columns content">
    <h3><?= __('Sistemashistoricos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataregistro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataimplantacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataultimaatualizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versaoatual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versaopathatual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemashistoricos as $sistemashistorico): ?>
            <tr>
                <td><?= $this->Number->format($sistemashistorico->id) ?></td>
                <td><?= h($sistemashistorico->dataregistro) ?></td>
                <td><?= $sistemashistorico->has('sistema') ? $this->Html->link($sistemashistorico->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemashistorico->sistema->id]) : '' ?></td>
                <td><?= h($sistemashistorico->dataimplantacao) ?></td>
                <td><?= h($sistemashistorico->dataultimaatualizacao) ?></td>
                <td><?= h($sistemashistorico->versaoatual) ?></td>
                <td><?= h($sistemashistorico->resumo) ?></td>
                <td><?= h($sistemashistorico->versaopathatual) ?></td>
                <td><?= h($sistemashistorico->created) ?></td>
                <td><?= h($sistemashistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemashistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemashistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemashistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemashistorico->id)]) ?>
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
