<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutoversflw[]|\Cake\Collection\CollectionInterface $projetoscutoversflws
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetoscutoversflw'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetoscutovers'), ['controller' => 'Projetoscutovers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetoscutover'), ['controller' => 'Projetoscutovers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscutoversflws index large-9 medium-8 columns content">
    <h3><?= __('Projetoscutoversflws') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetoscutover_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetoscutoversflws as $projetoscutoversflw): ?>
            <tr>
                <td><?= $this->Number->format($projetoscutoversflw->id) ?></td>
                <td><?= $projetoscutoversflw->has('projetoscutover') ? $this->Html->link($projetoscutoversflw->projetoscutover->id, ['controller' => 'Projetoscutovers', 'action' => 'view', $projetoscutoversflw->projetoscutover->id]) : '' ?></td>
                <td><?= h($projetoscutoversflw->dataemissao) ?></td>
                <td><?= h($projetoscutoversflw->descricao) ?></td>
                <td><?= h($projetoscutoversflw->responsavel) ?></td>
                <td><?= h($projetoscutoversflw->ativo) ?></td>
                <td><?= h($projetoscutoversflw->created) ?></td>
                <td><?= h($projetoscutoversflw->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetoscutoversflw->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetoscutoversflw->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetoscutoversflw->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutoversflw->id)]) ?>
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
