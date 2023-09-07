<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsfile[]|\Cake\Collection\CollectionInterface $sistemaprostepsfiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostepsfile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaprostepsfiles index large-9 medium-8 columns content">
    <h3><?= __('Sistemaprostepsfiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemaprostep_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomearquivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extensao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemaprostepsfiles as $sistemaprostepsfile): ?>
            <tr>
                <td><?= $this->Number->format($sistemaprostepsfile->id) ?></td>
                <td><?= $sistemaprostepsfile->has('sistemaprostep') ? $this->Html->link($sistemaprostepsfile->sistemaprostep->id, ['controller' => 'Sistemaprosteps', 'action' => 'view', $sistemaprostepsfile->sistemaprostep->id]) : '' ?></td>
                <td><?= h($sistemaprostepsfile->descricao) ?></td>
                <td><?= h($sistemaprostepsfile->nomearquivo) ?></td>
                <td><?= h($sistemaprostepsfile->extensao) ?></td>
                <td><?= h($sistemaprostepsfile->created) ?></td>
                <td><?= h($sistemaprostepsfile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemaprostepsfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemaprostepsfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemaprostepsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprostepsfile->id)]) ?>
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
