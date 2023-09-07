<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreeh[]|\Cake\Collection\CollectionInterface $fivewthreehs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['controller' => 'Atasdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['controller' => 'Atasdetalhes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehsparetos'), ['controller' => 'Fivewthreehsparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreehspareto'), ['controller' => 'Fivewthreehsparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasdiarios'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasdiario'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fivewthreehs index large-9 medium-8 columns content">
    <h3><?= __('Fivewthreehs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wwho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wwhen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hhowmany') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hhowmuch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hhowlong') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fivewthreehpredecessor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolvido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fivewthreehs as $fivewthreeh): ?>
            <tr>
                <td><?= $this->Number->format($fivewthreeh->id) ?></td>
                <td><?= $fivewthreeh->has('programa') ? $this->Html->link($fivewthreeh->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $fivewthreeh->programa->id]) : '' ?></td>
                <td><?= $fivewthreeh->has('projeto') ? $this->Html->link($fivewthreeh->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $fivewthreeh->projeto->id]) : '' ?></td>
                <td><?= $fivewthreeh->has('projetosproduto') ? $this->Html->link($fivewthreeh->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $fivewthreeh->projetosproduto->id]) : '' ?></td>
                <td><?= $fivewthreeh->has('participante') ? $this->Html->link($fivewthreeh->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $fivewthreeh->participante->id]) : '' ?></td>
                <td><?= h($fivewthreeh->description) ?></td>
                <td><?= h($fivewthreeh->wwho) ?></td>
                <td><?= h($fivewthreeh->wwhen) ?></td>
                <td><?= h($fivewthreeh->hhowmany) ?></td>
                <td><?= $this->Number->format($fivewthreeh->hhowmuch) ?></td>
                <td><?= h($fivewthreeh->hhowlong) ?></td>
                <td><?= h($fivewthreeh->created) ?></td>
                <td><?= h($fivewthreeh->modified) ?></td>
                <td><?= $fivewthreeh->has('statusfuncional') ? $this->Html->link($fivewthreeh->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $fivewthreeh->statusfuncional->id]) : '' ?></td>
                <td><?= $fivewthreeh->has('consultore') ? $this->Html->link($fivewthreeh->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $fivewthreeh->consultore->id]) : '' ?></td>
                <td><?= $this->Number->format($fivewthreeh->fivewthreehpredecessor) ?></td>
                <td><?= h($fivewthreeh->acao) ?></td>
                <td><?= h($fivewthreeh->resolvido) ?></td>
                <td><?= $fivewthreeh->has('ata') ? $this->Html->link($fivewthreeh->ata->resumogeral, ['controller' => 'Atas', 'action' => 'view', $fivewthreeh->ata->id]) : '' ?></td>
                <td><?= $fivewthreeh->has('empresa') ? $this->Html->link($fivewthreeh->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $fivewthreeh->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fivewthreeh->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fivewthreeh->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fivewthreeh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreeh->id)]) ?>
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
