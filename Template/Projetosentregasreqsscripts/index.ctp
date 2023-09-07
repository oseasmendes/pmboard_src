<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsscript[]|\Cake\Collection\CollectionInterface $projetosentregasreqsscripts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsscript'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsscripts index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasreqsscripts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasreqsref_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasreqsscripts as $projetosentregasreqsscript): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasreqsscript->id) ?></td>
                <td><?= h($projetosentregasreqsscript->referencia) ?></td>
                <td><?= h($projetosentregasreqsscript->descricao) ?></td>
                <td><?= $this->Number->format($projetosentregasreqsscript->projetosentregasreqsref_id) ?></td>
                <td><?= h($projetosentregasreqsscript->created) ?></td>
                <td><?= h($projetosentregasreqsscript->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasreqsscript->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasreqsscript->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasreqsscript->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsscript->id)]) ?>
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
