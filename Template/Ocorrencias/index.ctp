<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia[]|\Cake\Collection\CollectionInterface $ocorrencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresnotas'), ['controller' => 'Consultoresnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresnota'), ['controller' => 'Consultoresnotas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ocorrencias index large-9 medium-8 columns content">
    <h3><?= __('Ocorrencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocorrenciastipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ocorrencias as $ocorrencia): ?>
            <tr>
                <td><?= $this->Number->format($ocorrencia->id) ?></td>
                <td><?= $this->Number->format($ocorrencia->ocorrenciastipo_id) ?></td>
                <td><?= h($ocorrencia->descricao) ?></td>
                <td><?= h($ocorrencia->created) ?></td>
                <td><?= h($ocorrencia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ocorrencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ocorrencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]) ?>
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
