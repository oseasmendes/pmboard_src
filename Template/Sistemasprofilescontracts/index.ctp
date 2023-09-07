<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprofilescontract[]|\Cake\Collection\CollectionInterface $sistemasprofilescontracts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasprofilescontract'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasprofiles'), ['controller' => 'Sistemasprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasprofile'), ['controller' => 'Sistemasprofiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasprofilescontracts index large-9 medium-8 columns content">
    <h3><?= __('Sistemasprofilescontracts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasprofile_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasprofilescontracts as $sistemasprofilescontract): ?>
            <tr>
                <td><?= $this->Number->format($sistemasprofilescontract->id) ?></td>
                <td><?= $sistemasprofilescontract->has('sistema') ? $this->Html->link($sistemasprofilescontract->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasprofilescontract->sistema->id]) : '' ?></td>
                <td><?= $sistemasprofilescontract->has('sistemasprofile') ? $this->Html->link($sistemasprofilescontract->sistemasprofile->descricao, ['controller' => 'Sistemasprofiles', 'action' => 'view', $sistemasprofilescontract->sistemasprofile->id]) : '' ?></td>
                <td><?= h($sistemasprofilescontract->descricao) ?></td>
                <td><?= h($sistemasprofilescontract->ativo) ?></td>
                <td><?= h($sistemasprofilescontract->created) ?></td>
                <td><?= h($sistemasprofilescontract->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasprofilescontract->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasprofilescontract->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasprofilescontract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprofilescontract->id)]) ?>
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
