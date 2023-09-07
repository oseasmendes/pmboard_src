<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhesimg[]|\Cake\Collection\CollectionInterface $sistemasfaqsdetalhesimgs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhesimg'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhes'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhe'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasfaqsdetalhesimgs index large-9 medium-8 columns content">
    <h3><?= __('Sistemasfaqsdetalhesimgs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasfaqsdetalhe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pathimage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagestipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagemoriginalid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagempath') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasfaqsdetalhesimgs as $sistemasfaqsdetalhesimg): ?>
            <tr>
                <td><?= $this->Number->format($sistemasfaqsdetalhesimg->id) ?></td>
                <td><?= $sistemasfaqsdetalhesimg->has('sistemasfaqsdetalhe') ? $this->Html->link($sistemasfaqsdetalhesimg->sistemasfaqsdetalhe->id, ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'view', $sistemasfaqsdetalhesimg->sistemasfaqsdetalhe->id]) : '' ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->referencia) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->descricao) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->pathimage) ?></td>
                <td><?= $sistemasfaqsdetalhesimg->has('imagestipo') ? $this->Html->link($sistemasfaqsdetalhesimg->imagestipo->descricao, ['controller' => 'Imagestipos', 'action' => 'view', $sistemasfaqsdetalhesimg->imagestipo->id]) : '' ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->created) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->modified) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->image) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->imagemid) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->ativo) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->imagemoriginal) ?></td>
                <td><?= $this->Number->format($sistemasfaqsdetalhesimg->imagemoriginalid) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->imagempath) ?></td>
                <td><?= $this->Number->format($sistemasfaqsdetalhesimg->ordem) ?></td>
                <td><?= h($sistemasfaqsdetalhesimg->imagem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasfaqsdetalhesimg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasfaqsdetalhesimg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasfaqsdetalhesimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaqsdetalhesimg->id)]) ?>
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
