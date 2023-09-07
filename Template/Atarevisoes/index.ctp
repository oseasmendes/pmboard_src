<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atareviso[]|\Cake\Collection\CollectionInterface $atarevisoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atareviso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atarevisoes index large-9 medium-8 columns content">
    <h3><?= __('Atarevisoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('revisao_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('revisao_data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atarevisoes as $atareviso): ?>
            <tr>
                <td><?= $this->Number->format($atareviso->id) ?></td>
                <td><?= $atareviso->has('ata') ? $this->Html->link($atareviso->ata->id, ['controller' => 'Atas', 'action' => 'view', $atareviso->ata->id]) : '' ?></td>
                <td><?= $atareviso->has('participante') ? $this->Html->link($atareviso->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $atareviso->participante->id]) : '' ?></td>
                <td><?= h($atareviso->revisao_status) ?></td>
                <td><?= h($atareviso->revisao_data) ?></td>
                <td><?= h($atareviso->created) ?></td>
                <td><?= h($atareviso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atareviso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atareviso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atareviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atareviso->id)]) ?>
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
