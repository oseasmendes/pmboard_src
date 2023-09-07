<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistema[]|\Cake\Collection\CollectionInterface $sistemas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasareas'), ['controller' => 'Sistemasareas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasarea'), ['controller' => 'Sistemasareas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasbriefings'), ['controller' => 'Sistemasbriefings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasbriefing'), ['controller' => 'Sistemasbriefings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgrelacionados'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgrelacionado'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemashistoricos'), ['controller' => 'Sistemashistoricos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemashistorico'), ['controller' => 'Sistemashistoricos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemas index large-9 medium-8 columns content">
    <h3><?= __('Sistemas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataregistro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codinome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataimplantacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataultimaatualizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookmarked') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemas as $sistema): ?>
            <tr>
                <td><?= $this->Number->format($sistema->id) ?></td>
                <td><?= h($sistema->dataregistro) ?></td>
                <td><?= h($sistema->codinome) ?></td>
                <td><?= h($sistema->descricao) ?></td>
                <td><?= h($sistema->referencia) ?></td>
                <td><?= $sistema->has('empresa') ? $this->Html->link($sistema->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $sistema->empresa->id]) : '' ?></td>
                <td><?= h($sistema->dataimplantacao) ?></td>
                <td><?= h($sistema->dataultimaatualizacao) ?></td>
                <td><?= h($sistema->created) ?></td>
                <td><?= h($sistema->modified) ?></td>
                <td><?= $sistema->has('departamento') ? $this->Html->link($sistema->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistema->departamento->id]) : '' ?></td>
                <td><?= $this->Number->format($sistema->bookmarked) ?></td>
                <td><?= $this->Number->format($sistema->statusfuncional_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistema->id)]) ?>
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
