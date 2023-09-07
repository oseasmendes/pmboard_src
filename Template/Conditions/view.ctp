<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Condition $condition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Condition'), ['action' => 'edit', $condition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Condition'), ['action' => 'delete', $condition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conditions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Condition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conditions view large-9 medium-8 columns content">
    <h3><?= h($condition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($condition->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($condition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($condition->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($condition->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Atas') ?></h4>
        <?php if (!empty($condition->atas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Dataemissao') ?></th>
                <th scope="col"><?= __('Datareuniao') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Relator Id') ?></th>
                <th scope="col"><?= __('Patrocinador Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Resumogeral') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>
                <th scope="col"><?= __('Dataaprovacao') ?></th>
                <th scope="col"><?= __('Horarioreuniao') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Coordenadorreuniao Id') ?></th>
                <th scope="col"><?= __('Revisores') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Proximareuniaodata') ?></th>
                <th scope="col"><?= __('Proximareuniaohora') ?></th>
                <th scope="col"><?= __('Proximareuniaolocal') ?></th>
                <th scope="col"><?= __('Condition Id') ?></th>
                <th scope="col"><?= __('Pmoprojeto Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Tipodocumento Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($condition->atas as $atas): ?>
            <tr>
                <td><?= h($atas->id) ?></td>
                <td><?= h($atas->dataemissao) ?></td>
                <td><?= h($atas->datareuniao) ?></td>
                <td><?= h($atas->projeto_id) ?></td>
                <td><?= h($atas->relator_id) ?></td>
                <td><?= h($atas->patrocinador_id) ?></td>
                <td><?= h($atas->empresa_id) ?></td>
                <td><?= h($atas->resumogeral) ?></td>
                <td><?= h($atas->objetivo) ?></td>
                <td><?= h($atas->dataaprovacao) ?></td>
                <td><?= h($atas->horarioreuniao) ?></td>
                <td><?= h($atas->local) ?></td>
                <td><?= h($atas->coordenadorreuniao_id) ?></td>
                <td><?= h($atas->revisores) ?></td>
                <td><?= h($atas->versao) ?></td>
                <td><?= h($atas->proximareuniaodata) ?></td>
                <td><?= h($atas->proximareuniaohora) ?></td>
                <td><?= h($atas->proximareuniaolocal) ?></td>
                <td><?= h($atas->condition_id) ?></td>
                <td><?= h($atas->pmoprojeto_id) ?></td>
                <td><?= h($atas->departamento_id) ?></td>
                <td><?= h($atas->tipodocumento_id) ?></td>
                <td><?= h($atas->created) ?></td>
                <td><?= h($atas->modified) ?></td>
                <td><?= h($atas->horainicio) ?></td>
                <td><?= h($atas->horafim) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atas', 'action' => 'view', $atas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atas', 'action' => 'edit', $atas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atas', 'action' => 'delete', $atas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
