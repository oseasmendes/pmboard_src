<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendariosplano $calendariosplano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calendariosplano'), ['action' => 'edit', $calendariosplano->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calendariosplano'), ['action' => 'delete', $calendariosplano->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendariosplano->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calendariostipos'), ['controller' => 'Calendariostipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendariostipo'), ['controller' => 'Calendariostipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calendarios'), ['controller' => 'Calendarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendario'), ['controller' => 'Calendarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calendariosplanos view large-9 medium-8 columns content">
    <h3><?= h($calendariosplano->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($calendariosplano->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calendariostipo') ?></th>
            <td><?= $calendariosplano->has('calendariostipo') ? $this->Html->link($calendariosplano->calendariostipo->descricao, ['controller' => 'Calendariostipos', 'action' => 'view', $calendariosplano->calendariostipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $calendariosplano->has('empresa') ? $this->Html->link($calendariosplano->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $calendariosplano->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoprimeiraparada') ?></th>
            <td><?= h($calendariosplano->tempoprimeiraparada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temposegundaparada') ?></th>
            <td><?= h($calendariosplano->temposegundaparada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoterceiraparada') ?></th>
            <td><?= h($calendariosplano->tempoterceiraparada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoquartaparada') ?></th>
            <td><?= h($calendariosplano->tempoquartaparada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoalmocoparada') ?></th>
            <td><?= h($calendariosplano->tempoalmocoparada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($calendariosplano->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoabertura') ?></th>
            <td><?= $this->Number->format($calendariosplano->tempoabertura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoparadaprogramada') ?></th>
            <td><?= $this->Number->format($calendariosplano->tempoparadaprogramada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempodisponivel') ?></th>
            <td><?= $this->Number->format($calendariosplano->tempodisponivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horainicio') ?></th>
            <td><?= h($calendariosplano->horainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horafim') ?></th>
            <td><?= h($calendariosplano->horafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horaalmocoinicio') ?></th>
            <td><?= h($calendariosplano->horaalmocoinicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horaalmocofim') ?></th>
            <td><?= h($calendariosplano->horaalmocofim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primeiraparadainicio') ?></th>
            <td><?= h($calendariosplano->primeiraparadainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primeiraparadafim') ?></th>
            <td><?= h($calendariosplano->primeiraparadafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundaparadainicio') ?></th>
            <td><?= h($calendariosplano->segundaparadainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundaparadafim') ?></th>
            <td><?= h($calendariosplano->segundaparadafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terceiraparadainicio') ?></th>
            <td><?= h($calendariosplano->terceiraparadainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terceiraparadafim') ?></th>
            <td><?= h($calendariosplano->terceiraparadafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quartaparadainicio') ?></th>
            <td><?= h($calendariosplano->quartaparadainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quartaparadafim') ?></th>
            <td><?= h($calendariosplano->quartaparadafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($calendariosplano->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($calendariosplano->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Considerarcrossday') ?></th>
            <td><?= $calendariosplano->considerarcrossday ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Calendarios') ?></h4>
        <?php if (!empty($calendariosplano->calendarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Dia') ?></th>
                <th scope="col"><?= __('Mes') ?></th>
                <th scope="col"><?= __('Ano') ?></th>
                <th scope="col"><?= __('Dianome') ?></th>
                <th scope="col"><?= __('Mesnome') ?></th>
                <th scope="col"><?= __('Feriado') ?></th>
                <th scope="col"><?= __('Diaserial') ?></th>
                <th scope="col"><?= __('Endweek') ?></th>
                <th scope="col"><?= __('Semananumero') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Tempoabertura') ?></th>
                <th scope="col"><?= __('Tempoparadaprogramada') ?></th>
                <th scope="col"><?= __('Tempodisponivel') ?></th>
                <th scope="col"><?= __('Calendariosplano Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Etiqueta') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Expedientehorainicio') ?></th>
                <th scope="col"><?= __('Expedientehorafim') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($calendariosplano->calendarios as $calendarios): ?>
            <tr>
                <td><?= h($calendarios->id) ?></td>
                <td><?= h($calendarios->data) ?></td>
                <td><?= h($calendarios->dia) ?></td>
                <td><?= h($calendarios->mes) ?></td>
                <td><?= h($calendarios->ano) ?></td>
                <td><?= h($calendarios->dianome) ?></td>
                <td><?= h($calendarios->mesnome) ?></td>
                <td><?= h($calendarios->feriado) ?></td>
                <td><?= h($calendarios->diaserial) ?></td>
                <td><?= h($calendarios->endweek) ?></td>
                <td><?= h($calendarios->semananumero) ?></td>
                <td><?= h($calendarios->referenciadia) ?></td>
                <td><?= h($calendarios->created) ?></td>
                <td><?= h($calendarios->modified) ?></td>
                <td><?= h($calendarios->tempoabertura) ?></td>
                <td><?= h($calendarios->tempoparadaprogramada) ?></td>
                <td><?= h($calendarios->tempodisponivel) ?></td>
                <td><?= h($calendarios->calendariosplano_id) ?></td>
                <td><?= h($calendarios->empresa_id) ?></td>
                <td><?= h($calendarios->etiqueta) ?></td>
                <td><?= h($calendarios->observacao) ?></td>
                <td><?= h($calendarios->expedientehorainicio) ?></td>
                <td><?= h($calendarios->expedientehorafim) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Calendarios', 'action' => 'view', $calendarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Calendarios', 'action' => 'edit', $calendarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Calendarios', 'action' => 'delete', $calendarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
