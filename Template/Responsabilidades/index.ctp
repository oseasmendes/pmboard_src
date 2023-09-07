<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsabilidade[]|\Cake\Collection\CollectionInterface $responsabilidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidadestipos'), ['controller' => 'Responsabilidadestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidadestipo'), ['controller' => 'Responsabilidadestipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsabilidades index large-9 medium-8 columns content">
    <h3><?= __('Responsabilidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsabilidadestipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsabilidades as $responsabilidade): ?>
            <tr>
                <td><?= $this->Number->format($responsabilidade->id) ?></td>
                <td><?= h($responsabilidade->descricao) ?></td>
                <td><?= h($responsabilidade->created) ?></td>
                <td><?= h($responsabilidade->modified) ?></td>
                <td><?= $responsabilidade->has('responsabilidadestipo') ? $this->Html->link($responsabilidade->responsabilidadestipo->descricao, ['controller' => 'Responsabilidadestipos', 'action' => 'view', $responsabilidade->responsabilidadestipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsabilidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsabilidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsabilidade->id)]) ?>
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
