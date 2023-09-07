<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competencia[]|\Cake\Collection\CollectionInterface $competencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocacoespapeis'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocacoespapei'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competencias index large-9 medium-8 columns content">
    <h3><?= __('Competencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competencias as $competencia): ?>
            <tr>
                <td><?= $this->Number->format($competencia->id) ?></td>
                <td><?= h($competencia->descricao) ?></td>
                <td><?= h($competencia->resumo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competencia->id)]) ?>
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
