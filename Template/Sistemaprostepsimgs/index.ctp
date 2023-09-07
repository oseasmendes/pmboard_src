<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsimg[]|\Cake\Collection\CollectionInterface $sistemaprostepsimgs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostepsimg'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaprostepsimgs index large-9 medium-8 columns content">
    <h3><?= __('Sistemaprostepsimgs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemaprostep_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginalid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagempath') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemaprostepsimgs as $sistemaprostepsimg): ?>
            <tr>
                <td><?= $this->Number->format($sistemaprostepsimg->id) ?></td>
                <td><?= $sistemaprostepsimg->has('sistemaprostep') ? $this->Html->link($sistemaprostepsimg->sistemaprostep->description, ['controller' => 'Sistemaprosteps', 'action' => 'view', $sistemaprostepsimg->sistemaprostep->id]) : '' ?></td>
                <td><?= h($sistemaprostepsimg->referencia) ?></td>
                <td><?= h($sistemaprostepsimg->descricao) ?></td>
                <td><?= h($sistemaprostepsimg->imagemoriginal) ?></td>
                <td><?= h($sistemaprostepsimg->url) ?></td>
                <td><?= $this->Number->format($sistemaprostepsimg->imagemoriginalid) ?></td>
                <td><?= h($sistemaprostepsimg->imagempath) ?></td>
                <td><?= h($sistemaprostepsimg->created) ?></td>
                <td><?= h($sistemaprostepsimg->modified) ?></td>
                <td><?= $this->Number->format($sistemaprostepsimg->ordem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemaprostepsimg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemaprostepsimg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemaprostepsimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprostepsimg->id)]) ?>
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
