<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendario $calendario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calendario'), ['action' => 'edit', $calendario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calendario'), ['action' => 'delete', $calendario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calendarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calendarios view large-9 medium-8 columns content">
    <h3><?= h($calendario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dia') ?></th>
            <td><?= h($calendario->dia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mes') ?></th>
            <td><?= h($calendario->mes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano') ?></th>
            <td><?= h($calendario->ano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dianome') ?></th>
            <td><?= h($calendario->dianome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mesnome') ?></th>
            <td><?= h($calendario->mesnome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referenciadia') ?></th>
            <td><?= h($calendario->referenciadia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calendariosplano') ?></th>
            <td><?= $calendario->has('calendariosplano') ? $this->Html->link($calendario->calendariosplano->descricao, ['controller' => 'Calendariosplanos', 'action' => 'view', $calendario->calendariosplano->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $calendario->has('empresa') ? $this->Html->link($calendario->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $calendario->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($calendario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feriado') ?></th>
            <td><?= $this->Number->format($calendario->feriado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diaserial') ?></th>
            <td><?= $this->Number->format($calendario->diaserial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endweek') ?></th>
            <td><?= $this->Number->format($calendario->endweek) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semananumero') ?></th>
            <td><?= $this->Number->format($calendario->semananumero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoabertura') ?></th>
            <td><?= $this->Number->format($calendario->tempoabertura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoparadaprogramada') ?></th>
            <td><?= $this->Number->format($calendario->tempoparadaprogramada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempodisponivel') ?></th>
            <td><?= $this->Number->format($calendario->tempodisponivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($calendario->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($calendario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($calendario->modified) ?></td>
        </tr>
    </table>
</div>
