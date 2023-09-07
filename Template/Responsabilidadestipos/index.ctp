<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsabilidadestipo[]|\Cake\Collection\CollectionInterface $responsabilidadestipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Responsabilidadestipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsabilidadestipos index large-9 medium-8 columns content">
    <h3><?= __('Responsabilidadestipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsabilidadestipos as $responsabilidadestipo): ?>
            <tr>
                <td><?= $this->Number->format($responsabilidadestipo->id) ?></td>
                <td><?= h($responsabilidadestipo->descricao) ?></td>
                <td><?= h($responsabilidadestipo->created) ?></td>
                <td><?= h($responsabilidadestipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsabilidadestipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsabilidadestipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsabilidadestipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsabilidadestipo->id)]) ?>
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
