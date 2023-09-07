<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosaloc[]|\Cake\Collection\CollectionInterface $projetosalocs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsnotas'), ['controller' => 'Projetosalocsnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsnota'), ['controller' => 'Projetosalocsnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['controller' => 'Projetosalocsprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsprofile'), ['controller' => 'Projetosalocsprofiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocs index large-9 medium-8 columns content">
    <h3><?= __('Alocações') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoaloc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataalocacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('percentual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosalocs as $projetosaloc): ?>
            <tr>
                <td><?= $this->Number->format($projetosaloc->id) ?></td>
                <td><?= $projetosaloc->has('projeto') ? $this->Html->link($projetosaloc->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosaloc->projeto->id]) : '' ?></td>
                <td><?= $projetosaloc->has('consultore') ? $this->Html->link($projetosaloc->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosaloc->consultore->id]) : '' ?></td>
                <td><?= $projetosaloc->has('tipoaloc') ? $this->Html->link($projetosaloc->tipoaloc->descricao, ['controller' => 'Tipoalocs', 'action' => 'view', $projetosaloc->tipoaloc->id]) : '' ?></td>
                <td><?= h($projetosaloc->created) ?></td>
                <td><?= h($projetosaloc->modified) ?></td>
                <td><?= h($projetosaloc->dataalocacao) ?></td>
                <td><?= $projetosaloc->has('statusfuncional') ? $this->Html->link($projetosaloc->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosaloc->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosaloc->descricao) ?></td>
                <td><?= $this->Number->format($projetosaloc->percentual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosaloc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosaloc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosaloc->id)]) ?>
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
