<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto[]|\Cake\Collection\CollectionInterface $projetos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetos index large-9 medium-8 columns content">
    <h3><?= __('Projetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administrativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('propostatecnica') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetos as $projeto): ?>
            <tr>
                <td><?= $this->Number->format($projeto->id) ?></td>
                <td><?= h($projeto->descricao) ?></td>
                <td><?= $projeto->has('programa') ? $this->Html->link($projeto->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $projeto->programa->id]) : '' ?></td>
                <td><?= h($projeto->datainicio) ?></td>
                <td><?= h($projeto->datafim) ?></td>
                <td><?= $projeto->has('statusfuncional') ? $this->Html->link($projeto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projeto->statusfuncional->id]) : '' ?></td>
                <td><?= h($projeto->administrativo) ?></td>
                <td><?= $this->Number->format($projeto->prioridade) ?></td>
                <td><?= $projeto->has('fase') ? $this->Html->link($projeto->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $projeto->fase->id]) : '' ?></td>
                <td><?= h($projeto->codenome) ?></td>
                <td><?= h($projeto->propostatecnica) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?>
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
