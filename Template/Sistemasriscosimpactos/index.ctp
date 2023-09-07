<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasriscosimpacto[]|\Cake\Collection\CollectionInterface $sistemasriscosimpactos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasriscosimpacto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasriscosimpactos index large-9 medium-8 columns content">
    <h3><?= __('Sistemasriscosimpactos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemarisco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasriscosimpactos as $sistemasriscosimpacto): ?>
            <tr>
                <td><?= $this->Number->format($sistemasriscosimpacto->id) ?></td>
                <td><?= $this->Number->format($sistemasriscosimpacto->sistemarisco_id) ?></td>
                <td><?= h($sistemasriscosimpacto->descricao) ?></td>
                <td><?= h($sistemasriscosimpacto->tipo) ?></td>
                <td><?= h($sistemasriscosimpacto->nivel) ?></td>
                <td><?= h($sistemasriscosimpacto->created) ?></td>
                <td><?= h($sistemasriscosimpacto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasriscosimpacto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasriscosimpacto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasriscosimpacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasriscosimpacto->id)]) ?>
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
