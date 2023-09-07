<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresvrstecnologia[]|\Cake\Collection\CollectionInterface $consultoresvrstecnologias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresvrstecnologias index large-9 medium-8 columns content">
    <h3><?= __('Consultoresvrstecnologias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnologia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('knowhow_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoresvrstecnologias as $consultoresvrstecnologia): ?>
            <tr>
                <td><?= $this->Number->format($consultoresvrstecnologia->id) ?></td>
                <td><?= $consultoresvrstecnologia->has('consultore') ? $this->Html->link($consultoresvrstecnologia->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresvrstecnologia->consultore->id]) : '' ?></td>
                <td><?= $consultoresvrstecnologia->has('tecnologia') ? $this->Html->link($consultoresvrstecnologia->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $consultoresvrstecnologia->tecnologia->id]) : '' ?></td>
                <td><?= $consultoresvrstecnologia->has('knowhow') ? $this->Html->link($consultoresvrstecnologia->knowhow->descricao, ['controller' => 'Knowhows', 'action' => 'view', $consultoresvrstecnologia->knowhow->id]) : '' ?></td>
                <td><?= h($consultoresvrstecnologia->created) ?></td>
                <td><?= h($consultoresvrstecnologia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultoresvrstecnologia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultoresvrstecnologia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultoresvrstecnologia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresvrstecnologia->id)]) ?>
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
