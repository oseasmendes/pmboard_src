<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ata[]|\Cake\Collection\CollectionInterface $atas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conditions'), ['controller' => 'Conditions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Condition'), ['controller' => 'Conditions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipodocumentos'), ['controller' => 'Tipodocumentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipodocumento'), ['controller' => 'Tipodocumentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ataaprovadores'), ['controller' => 'Ataaprovadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ataaprovadore'), ['controller' => 'Ataaprovadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ataparticipantes'), ['controller' => 'Ataparticipantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ataparticipante'), ['controller' => 'Ataparticipantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atarevisaohistoricos'), ['controller' => 'Atarevisaohistoricos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atarevisaohistorico'), ['controller' => 'Atarevisaohistoricos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atarevisoes'), ['controller' => 'Atarevisoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atareviso'), ['controller' => 'Atarevisoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atas index large-9 medium-8 columns content">
    <h3><?= __('Atas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datareuniao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agenda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relator_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patrocinador_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumogeral') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horarioreuniao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordenadorreuniao_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proximadatareuniao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proximareuniaolocal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('condition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pmoprojeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipodocumento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafim') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atas as $ata): ?>
            <tr>
                <td><?= $this->Number->format($ata->id) ?></td>
                <td><?= h($ata->dataemissao) ?></td>
                <td><?= h($ata->datareuniao) ?></td>
                <td><?= $this->Number->format($ata->agenda_id) ?></td>
                <td><?= $this->Number->format($ata->relator_id) ?></td>
                <td><?= $this->Number->format($ata->patrocinador_id) ?></td>
                <td><?= h($ata->resumogeral) ?></td>
                <td><?= h($ata->horarioreuniao) ?></td>
                <td><?= h($ata->local) ?></td>
                <td><?= $this->Number->format($ata->coordenadorreuniao_id) ?></td>
                <td><?= h($ata->versao) ?></td>
                <td><?= h($ata->proximadatareuniao) ?></td>
                <td><?= h($ata->proximareuniaolocal) ?></td>
                <td><?= $ata->has('condition') ? $this->Html->link($ata->condition->descricao, ['controller' => 'Conditions', 'action' => 'view', $ata->condition->id]) : '' ?></td>
                <td><?= $ata->has('participante') ? $this->Html->link($ata->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ata->participante->id]) : '' ?></td>
                <td><?= $ata->has('tipodocumento') ? $this->Html->link($ata->tipodocumento->descricao, ['controller' => 'Tipodocumentos', 'action' => 'view', $ata->tipodocumento->id]) : '' ?></td>
                <td><?= h($ata->created) ?></td>
                <td><?= h($ata->modified) ?></td>
                <td><?= h($ata->horainicio) ?></td>
                <td><?= h($ata->horafim) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ata->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ata->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ata->id)]) ?>
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
