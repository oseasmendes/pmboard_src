<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atadetalhedata[]|\Cake\Collection\CollectionInterface $atadetalhedatas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atadetalhedata'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atadetalhes'), ['controller' => 'Atadetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atadetalhe'), ['controller' => 'Atadetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atadetalhedatas index large-9 medium-8 columns content">
    <h3><?= __('Atadetalhedatas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atadetalhe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataprometida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataexecutada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docanexo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atadetalhedatas as $atadetalhedata): ?>
            <tr>
                <td><?= $this->Number->format($atadetalhedata->id) ?></td>
                <td><?= $atadetalhedata->has('atadetalhe') ? $this->Html->link($atadetalhedata->atadetalhe->id, ['controller' => 'Atadetalhes', 'action' => 'view', $atadetalhedata->atadetalhe->id]) : '' ?></td>
                <td><?= h($atadetalhedata->dataprometida) ?></td>
                <td><?= h($atadetalhedata->dataexecutada) ?></td>
                <td><?= h($atadetalhedata->created) ?></td>
                <td><?= h($atadetalhedata->modified) ?></td>
                <td><?= h($atadetalhedata->docanexo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atadetalhedata->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atadetalhedata->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atadetalhedata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atadetalhedata->id)]) ?>
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
