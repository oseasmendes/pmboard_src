<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsnota[]|\Cake\Collection\CollectionInterface $projetosalocsnotas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsnota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocsnotas index large-9 medium-8 columns content">
    <h3><?= __('Projetosalocsnotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notatipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosaloc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosalocsnotas as $projetosalocsnota): ?>
            <tr>
                <td><?= $this->Number->format($projetosalocsnota->id) ?></td>
                <td><?= $projetosalocsnota->has('notatipo') ? $this->Html->link($projetosalocsnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosalocsnota->notatipo->id]) : '' ?></td>
                <td><?= h($projetosalocsnota->descricao) ?></td>
                <td><?= $projetosalocsnota->has('projetosaloc') ? $this->Html->link($projetosalocsnota->projetosaloc->descricao, ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocsnota->projetosaloc->id]) : '' ?></td>
                <td><?= h($projetosalocsnota->created) ?></td>
                <td><?= h($projetosalocsnota->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosalocsnota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosalocsnota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosalocsnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsnota->id)]) ?>
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
