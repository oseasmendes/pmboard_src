<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propostasalocsagenda[]|\Cake\Collection\CollectionInterface $propostasalocsagendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Propostasalocsagenda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propostasalocsagendas index large-9 medium-8 columns content">
    <h3><?= __('Propostasalocsagendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('propostasaloc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jornadadetrabalho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hrinicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hrfim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semanatag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semananumero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referenciadia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jornadatrabalholiquido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weekend') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diasemana') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propostasalocsagendas as $propostasalocsagenda): ?>
            <tr>
                <td><?= $this->Number->format($propostasalocsagenda->id) ?></td>
                <td><?= $propostasalocsagenda->has('propostasaloc') ? $this->Html->link($propostasalocsagenda->propostasaloc->id, ['controller' => 'Propostasalocs', 'action' => 'view', $propostasalocsagenda->propostasaloc->id]) : '' ?></td>
                <td><?= h($propostasalocsagenda->data) ?></td>
                <td><?= $this->Number->format($propostasalocsagenda->jornadadetrabalho) ?></td>
                <td><?= h($propostasalocsagenda->hrinicio) ?></td>
                <td><?= h($propostasalocsagenda->hrfim) ?></td>
                <td><?= h($propostasalocsagenda->semanatag) ?></td>
                <td><?= $this->Number->format($propostasalocsagenda->semananumero) ?></td>
                <td><?= h($propostasalocsagenda->created) ?></td>
                <td><?= h($propostasalocsagenda->modified) ?></td>
                <td><?= h($propostasalocsagenda->referenciadia) ?></td>
                <td><?= $this->Number->format($propostasalocsagenda->jornadatrabalholiquido) ?></td>
                <td><?= $this->Number->format($propostasalocsagenda->ordem) ?></td>
                <td><?= $this->Number->format($propostasalocsagenda->weekend) ?></td>
                <td><?= $this->Number->format($propostasalocsagenda->diasemana) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $propostasalocsagenda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $propostasalocsagenda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $propostasalocsagenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasalocsagenda->id)]) ?>
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
