<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprofile[]|\Cake\Collection\CollectionInterface $sistemasprofiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasprofile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasprofilescontracts'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasprofilescontract'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasprofiles index large-9 medium-8 columns content">
    <h3><?= __('Sistemasprofiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsabilidade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasprofiles as $sistemasprofile): ?>
            <tr>
                <td><?= $this->Number->format($sistemasprofile->id) ?></td>
                <td><?= h($sistemasprofile->descricao) ?></td>
                <td><?= $sistemasprofile->has('responsabilidade') ? $this->Html->link($sistemasprofile->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $sistemasprofile->responsabilidade->id]) : '' ?></td>
                <td><?= h($sistemasprofile->ativo) ?></td>
                <td><?= h($sistemasprofile->created) ?></td>
                <td><?= h($sistemasprofile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasprofile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasprofile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprofile->id)]) ?>
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
