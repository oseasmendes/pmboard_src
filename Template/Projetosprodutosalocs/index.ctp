<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosaloc[]|\Cake\Collection\CollectionInterface $projetosprodutosalocs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosaloc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipoalocs'), ['controller' => 'Tipoalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipoaloc'), ['controller' => 'Tipoalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosalocs index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosalocs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataalocacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('percentual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoaloc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desalocacaoprevista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desalocacaorealizada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosalocs as $projetosprodutosaloc): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosaloc->id) ?></td>
                <td><?= $projetosprodutosaloc->has('projetosproduto') ? $this->Html->link($projetosprodutosaloc->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosaloc->projetosproduto->id]) : '' ?></td>
                <td><?= $projetosprodutosaloc->has('consultore') ? $this->Html->link($projetosprodutosaloc->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosaloc->consultore->id]) : '' ?></td>
                <td><?= h($projetosprodutosaloc->created) ?></td>
                <td><?= h($projetosprodutosaloc->modified) ?></td>
                <td><?= h($projetosprodutosaloc->dataalocacao) ?></td>
                <td><?= $projetosprodutosaloc->has('statusfuncional') ? $this->Html->link($projetosprodutosaloc->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosaloc->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosprodutosaloc->descricao) ?></td>
                <td><?= $this->Number->format($projetosprodutosaloc->percentual) ?></td>
                <td><?= $projetosprodutosaloc->has('tipoaloc') ? $this->Html->link($projetosprodutosaloc->tipoaloc->descricao, ['controller' => 'Tipoalocs', 'action' => 'view', $projetosprodutosaloc->tipoaloc->id]) : '' ?></td>
                <td><?= h($projetosprodutosaloc->desalocacaoprevista) ?></td>
                <td><?= h($projetosprodutosaloc->desalocacaorealizada) ?></td>
                <td><?= h($projetosprodutosaloc->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosaloc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosaloc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosaloc->id)]) ?>
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
