<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pmolancamentostipo[]|\Cake\Collection\CollectionInterface $pmolancamentostipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pmolancamentostipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pmocapacitytransactions'), ['controller' => 'Pmocapacitytransactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pmocapacitytransaction'), ['controller' => 'Pmocapacitytransactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pmolancamentostipos index large-9 medium-8 columns content">
    <h3><?= __('Pmolancamentostipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calculacapacidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pmolancamentostipos as $pmolancamentostipo): ?>
            <tr>
                <td><?= $this->Number->format($pmolancamentostipo->id) ?></td>
                <td><?= h($pmolancamentostipo->descricao) ?></td>
                <td><?= h($pmolancamentostipo->resumo) ?></td>
                <td><?= h($pmolancamentostipo->calculacapacidade) ?></td>
                <td><?= h($pmolancamentostipo->operacao) ?></td>
                <td><?= h($pmolancamentostipo->created) ?></td>
                <td><?= h($pmolancamentostipo->modified) ?></td>
                <td><?= $this->Number->format($pmolancamentostipo->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pmolancamentostipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pmolancamentostipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pmolancamentostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pmolancamentostipo->id)]) ?>
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
