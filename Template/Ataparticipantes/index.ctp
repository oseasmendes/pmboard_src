<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataparticipante[]|\Cake\Collection\CollectionInterface $ataparticipantes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ataparticipante'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataparticipantes index large-9 medium-8 columns content">
    <h3><?= __('Ataparticipantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ataparticipantes as $ataparticipante): ?>
            <tr>
                <td><?= $this->Number->format($ataparticipante->id) ?></td>
                <td><?= $ataparticipante->has('ata') ? $this->Html->link($ataparticipante->ata->id, ['controller' => 'Atas', 'action' => 'view', $ataparticipante->ata->id]) : '' ?></td>
                <td><?= $ataparticipante->has('participante') ? $this->Html->link($ataparticipante->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ataparticipante->participante->id]) : '' ?></td>
                <td><?= h($ataparticipante->created) ?></td>
                <td><?= h($ataparticipante->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ataparticipante->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ataparticipante->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ataparticipante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataparticipante->id)]) ?>
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
