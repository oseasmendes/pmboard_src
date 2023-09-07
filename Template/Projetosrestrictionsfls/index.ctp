<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosrestrictionsfl[]|\Cake\Collection\CollectionInterface $projetosrestrictionsfls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosrestrictionsfl'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosrestrictions'), ['controller' => 'Projetosrestrictions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosrestriction'), ['controller' => 'Projetosrestrictions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosrestrictionsfls index large-9 medium-8 columns content">
    <h3><?= __('Projetosrestrictionsfls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosrestriction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosrestrictionsfls as $projetosrestrictionsfl): ?>
            <tr>
                <td><?= $this->Number->format($projetosrestrictionsfl->id) ?></td>
                <td><?= $projetosrestrictionsfl->has('projetosrestriction') ? $this->Html->link($projetosrestrictionsfl->projetosrestriction->id, ['controller' => 'Projetosrestrictions', 'action' => 'view', $projetosrestrictionsfl->projetosrestriction->id]) : '' ?></td>
                <td><?= h($projetosrestrictionsfl->dataemissao) ?></td>
                <td><?= h($projetosrestrictionsfl->descricao) ?></td>
                <td><?= h($projetosrestrictionsfl->ativo) ?></td>
                <td><?= h($projetosrestrictionsfl->created) ?></td>
                <td><?= h($projetosrestrictionsfl->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosrestrictionsfl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosrestrictionsfl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosrestrictionsfl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestrictionsfl->id)]) ?>
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
