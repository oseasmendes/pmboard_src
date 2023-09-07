<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendariostipo $calendariostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calendariostipo'), ['action' => 'edit', $calendariostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calendariostipo'), ['action' => 'delete', $calendariostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendariostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calendariostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendariostipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calendariostipos view large-9 medium-8 columns content">
    <h3><?= h($calendariostipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($calendariostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($calendariostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($calendariostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($calendariostipo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planosimulacao') ?></th>
            <td><?= $calendariostipo->planosimulacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Calendariosplanos') ?></h4>
        <?php if (!empty($calendariostipo->calendariosplanos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Calendariostipo Id') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Horaalmocoinicio') ?></th>
                <th scope="col"><?= __('Horaalmocofim') ?></th>
                <th scope="col"><?= __('Primeiraparadainicio') ?></th>
                <th scope="col"><?= __('Primeiraparadafim') ?></th>
                <th scope="col"><?= __('Segundaparadainicio') ?></th>
                <th scope="col"><?= __('Segundaparadafim') ?></th>
                <th scope="col"><?= __('Terceiraparadainicio') ?></th>
                <th scope="col"><?= __('Terceiraparadafim') ?></th>
                <th scope="col"><?= __('Quartaparadainicio') ?></th>
                <th scope="col"><?= __('Quartaparadafim') ?></th>
                <th scope="col"><?= __('Tempoabertura') ?></th>
                <th scope="col"><?= __('Tempoparadaprogramada') ?></th>
                <th scope="col"><?= __('Tempodisponivel') ?></th>
                <th scope="col"><?= __('Considerarcrossday') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($calendariostipo->calendariosplanos as $calendariosplanos): ?>
            <tr>
                <td><?= h($calendariosplanos->id) ?></td>
                <td><?= h($calendariosplanos->descricao) ?></td>
                <td><?= h($calendariosplanos->calendariostipo_id) ?></td>
                <td><?= h($calendariosplanos->horainicio) ?></td>
                <td><?= h($calendariosplanos->horafim) ?></td>
                <td><?= h($calendariosplanos->horaalmocoinicio) ?></td>
                <td><?= h($calendariosplanos->horaalmocofim) ?></td>
                <td><?= h($calendariosplanos->primeiraparadainicio) ?></td>
                <td><?= h($calendariosplanos->primeiraparadafim) ?></td>
                <td><?= h($calendariosplanos->segundaparadainicio) ?></td>
                <td><?= h($calendariosplanos->segundaparadafim) ?></td>
                <td><?= h($calendariosplanos->terceiraparadainicio) ?></td>
                <td><?= h($calendariosplanos->terceiraparadafim) ?></td>
                <td><?= h($calendariosplanos->quartaparadainicio) ?></td>
                <td><?= h($calendariosplanos->quartaparadafim) ?></td>
                <td><?= h($calendariosplanos->tempoabertura) ?></td>
                <td><?= h($calendariosplanos->tempoparadaprogramada) ?></td>
                <td><?= h($calendariosplanos->tempodisponivel) ?></td>
                <td><?= h($calendariosplanos->considerarcrossday) ?></td>
                <td><?= h($calendariosplanos->created) ?></td>
                <td><?= h($calendariosplanos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Calendariosplanos', 'action' => 'view', $calendariosplanos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Calendariosplanos', 'action' => 'edit', $calendariosplanos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Calendariosplanos', 'action' => 'delete', $calendariosplanos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendariosplanos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
