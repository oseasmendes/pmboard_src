<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atasdetalhe $atasdetalhe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atasdetalhe'), ['action' => 'edit', $atasdetalhe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atasdetalhe'), ['action' => 'delete', $atasdetalhe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atasdetalhe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atasdetalhes view large-9 medium-8 columns content">
    <h3><?= h($atasdetalhe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $atasdetalhe->has('ata') ? $this->Html->link($atasdetalhe->ata->resumogeral, ['controller' => 'Atas', 'action' => 'view', $atasdetalhe->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($atasdetalhe->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $atasdetalhe->has('participante') ? $this->Html->link($atasdetalhe->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $atasdetalhe->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusacao') ?></th>
            <td><?= h($atasdetalhe->statusacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etapa') ?></th>
            <td><?= $atasdetalhe->has('etapa') ? $this->Html->link($atasdetalhe->etapa->id, ['controller' => 'Etapas', 'action' => 'view', $atasdetalhe->etapa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividade') ?></th>
            <td><?= $atasdetalhe->has('atividade') ? $this->Html->link($atasdetalhe->atividade->id, ['controller' => 'Atividades', 'action' => 'view', $atasdetalhe->atividade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fivewthreeh') ?></th>
            <td><?= $atasdetalhe->has('fivewthreeh') ? $this->Html->link($atasdetalhe->fivewthreeh->descricao, ['controller' => 'Fivewthreehs', 'action' => 'view', $atasdetalhe->fivewthreeh->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Processo') ?></th>
            <td><?= $atasdetalhe->has('processo') ? $this->Html->link($atasdetalhe->processo->id, ['controller' => 'Processos', 'action' => 'view', $atasdetalhe->processo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atasdetalhe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atadetallheordem') ?></th>
            <td><?= $this->Number->format($atasdetalhe->atadetallheordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevista') ?></th>
            <td><?= h($atasdetalhe->dataprevista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataexecutada') ?></th>
            <td><?= h($atasdetalhe->dataexecutada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horaexecutada') ?></th>
            <td><?= h($atasdetalhe->horaexecutada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atasdetalhe->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atasdetalhe->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horainicio') ?></th>
            <td><?= h($atasdetalhe->horainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horafim') ?></th>
            <td><?= h($atasdetalhe->horafim) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhamento') ?></h4>
        <?= $this->Text->autoParagraph(h($atasdetalhe->detalhamento)); ?>
    </div>
</div>
