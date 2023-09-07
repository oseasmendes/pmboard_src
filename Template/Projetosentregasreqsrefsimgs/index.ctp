<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsimg[]|\Cake\Collection\CollectionInterface $projetosentregasreqsrefsimgs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsimg'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsimgs index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasreqsrefsimgs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasreqsref_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pathimage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagestipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasreqsrefsimgs as $projetosentregasreqsrefsimg): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasreqsrefsimg->id) ?></td>
                <td><?= $this->Number->format($projetosentregasreqsrefsimg->projetosentregasreqsref_id) ?></td>
                <td><?= h($projetosentregasreqsrefsimg->descricao) ?></td>
                <td><?= h($projetosentregasreqsrefsimg->pathimage) ?></td>
                <td><?= $projetosentregasreqsrefsimg->has('imagestipo') ? $this->Html->link($projetosentregasreqsrefsimg->imagestipo->descricao, ['controller' => 'Imagestipos', 'action' => 'view', $projetosentregasreqsrefsimg->imagestipo->id]) : '' ?></td>
                <td><?= h($projetosentregasreqsrefsimg->created) ?></td>
                <td><?= h($projetosentregasreqsrefsimg->modified) ?></td>
                <td><?= h($projetosentregasreqsrefsimg->image) ?></td>
                <td><?= h($projetosentregasreqsrefsimg->imagemid) ?></td>
                <td><?= h($projetosentregasreqsrefsimg->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasreqsrefsimg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasreqsrefsimg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasreqsrefsimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsimg->id)]) ?>
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
