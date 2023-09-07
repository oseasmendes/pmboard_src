<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atasdetalhe[]|\Cake\Collection\CollectionInterface $atasdetalhes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atasdetalhes index large-9 medium-8 columns content">
    <h3><?= __('Atasdetalhes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataprevista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataexecutada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atadetallheordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaexecutada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etapa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fivewthreeh_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atasdetalhes as $atasdetalhe): ?>
            <tr>
                <td><?= $this->Number->format($atasdetalhe->id) ?></td>
                <td><?= $atasdetalhe->has('ata') ? $this->Html->link($atasdetalhe->ata->resumogeral, ['controller' => 'Atas', 'action' => 'view', $atasdetalhe->ata->id]) : '' ?></td>
                <td><?= h($atasdetalhe->resumo) ?></td>
                <td><?= $atasdetalhe->has('participante') ? $this->Html->link($atasdetalhe->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $atasdetalhe->participante->id]) : '' ?></td>
                <td><?= h($atasdetalhe->dataprevista) ?></td>
                <td><?= h($atasdetalhe->statusacao) ?></td>
                <td><?= h($atasdetalhe->dataexecutada) ?></td>
                <td><?= $this->Number->format($atasdetalhe->atadetallheordem) ?></td>
                <td><?= h($atasdetalhe->horaexecutada) ?></td>
                <td><?= $atasdetalhe->has('etapa') ? $this->Html->link($atasdetalhe->etapa->id, ['controller' => 'Etapas', 'action' => 'view', $atasdetalhe->etapa->id]) : '' ?></td>
                <td><?= $atasdetalhe->has('atividade') ? $this->Html->link($atasdetalhe->atividade->id, ['controller' => 'Atividades', 'action' => 'view', $atasdetalhe->atividade->id]) : '' ?></td>
                <td><?= h($atasdetalhe->created) ?></td>
                <td><?= h($atasdetalhe->modified) ?></td>
                <td><?= h($atasdetalhe->horainicio) ?></td>
                <td><?= h($atasdetalhe->horafim) ?></td>
                <td><?= $atasdetalhe->has('fivewthreeh') ? $this->Html->link($atasdetalhe->fivewthreeh->descricao, ['controller' => 'Fivewthreehs', 'action' => 'view', $atasdetalhe->fivewthreeh->id]) : '' ?></td>
                <td><?= $atasdetalhe->has('processo') ? $this->Html->link($atasdetalhe->processo->id, ['controller' => 'Processos', 'action' => 'view', $atasdetalhe->processo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atasdetalhe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atasdetalhe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atasdetalhe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atasdetalhe->id)]) ?>
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
