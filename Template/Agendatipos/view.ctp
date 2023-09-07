<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendatipo $agendatipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agendatipo'), ['action' => 'edit', $agendatipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agendatipo'), ['action' => 'delete', $agendatipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendatipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agendatipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendatipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agendatipos view large-9 medium-8 columns content">
    <h3><?= h($agendatipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($agendatipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agendatipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agendatipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agendatipo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notificacao') ?></th>
            <td><?= $agendatipo->notificacao ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnica') ?></th>
            <td><?= $agendatipo->tecnica ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendas') ?></h4>
        <?php if (!empty($agendatipo->agendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Tipoagenda') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Dataagenda') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Diadasemana') ?></th>
                <th scope="col"><?= __('Localdiferente') ?></th>
                <th scope="col"><?= __('Periodicidade') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Agendatipo Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Projetossprint Id') ?></th>
                <th scope="col"><?= __('Dailysequence Id') ?></th>
                <th scope="col"><?= __('Iniciorealizado') ?></th>
                <th scope="col"><?= __('Inicioprevisto') ?></th>
                <th scope="col"><?= __('Motivorealizado') ?></th>
                <th scope="col"><?= __('Encerramentopreviso') ?></th>
                <th scope="col"><?= __('Encerramentorealizado') ?></th>
                <th scope="col"><?= __('Atualizadoem') ?></th>
                <th scope="col"><?= __('Agendastatus') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agendatipo->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->atividadetipo_id) ?></td>
                <td><?= h($agendas->departamento_id) ?></td>
                <td><?= h($agendas->projeto_id) ?></td>
                <td><?= h($agendas->tipoagenda) ?></td>
                <td><?= h($agendas->observacao) ?></td>
                <td><?= h($agendas->dataagenda) ?></td>
                <td><?= h($agendas->horainicio) ?></td>
                <td><?= h($agendas->horafim) ?></td>
                <td><?= h($agendas->local) ?></td>
                <td><?= h($agendas->created) ?></td>
                <td><?= h($agendas->modified) ?></td>
                <td><?= h($agendas->etiquetaadicional) ?></td>
                <td><?= h($agendas->diadasemana) ?></td>
                <td><?= h($agendas->localdiferente) ?></td>
                <td><?= h($agendas->Periodicidade) ?></td>
                <td><?= h($agendas->referencia) ?></td>
                <td><?= h($agendas->referenciadia) ?></td>
                <td><?= h($agendas->projetosproduto_id) ?></td>
                <td><?= h($agendas->projetosprodutosentrega_id) ?></td>
                <td><?= h($agendas->agendatipo_id) ?></td>
                <td><?= h($agendas->consultore_id) ?></td>
                <td><?= h($agendas->projetossprint_id) ?></td>
                <td><?= h($agendas->dailysequence_id) ?></td>
                <td><?= h($agendas->iniciorealizado) ?></td>
                <td><?= h($agendas->inicioprevisto) ?></td>
                <td><?= h($agendas->motivorealizado) ?></td>
                <td><?= h($agendas->encerramentopreviso) ?></td>
                <td><?= h($agendas->encerramentorealizado) ?></td>
                <td><?= h($agendas->atualizadoem) ?></td>
                <td><?= h($agendas->agendastatus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
