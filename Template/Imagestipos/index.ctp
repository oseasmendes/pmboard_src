<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagestipo[]|\Cake\Collection\CollectionInterface $imagestipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosimages'), ['controller' => 'Projetosimages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosimage'), ['controller' => 'Projetosimages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagestipos index large-9 medium-8 columns content">
    <h3><?= __('Imagestipos') ?></h3>
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
            <?php foreach ($imagestipos as $imagestipo): ?>
            <tr>
                <td><?= $this->Number->format($imagestipo->id) ?></td>
                <td><?= h($imagestipo->descricao) ?></td>
                <td><?= h($imagestipo->created) ?></td>
                <td><?= h($imagestipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagestipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagestipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagestipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagestipo->id)]) ?>
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
