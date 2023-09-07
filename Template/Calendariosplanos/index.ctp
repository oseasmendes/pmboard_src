<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendariosplano[]|\Cake\Collection\CollectionInterface $calendariosplanos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calendariostipos'), ['controller' => 'Calendariostipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendariostipo'), ['controller' => 'Calendariostipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calendarios'), ['controller' => 'Calendarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendario'), ['controller' => 'Calendarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendariosplanos index large-9 medium-8 columns content">
    <h3><?= __('Calendariosplanos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calendariostipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaalmocoinicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaalmocofim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primeiraparadainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primeiraparadafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segundaparadainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segundaparadafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terceiraparadainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terceiraparadafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quartaparadainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quartaparadafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoabertura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoparadaprogramada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempodisponivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('considerarcrossday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoprimeiraparada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temposegundaparada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoterceiraparada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoquartaparada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempoalmocoparada') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendariosplanos as $calendariosplano): ?>
            <tr>
                <td><?= $this->Number->format($calendariosplano->id) ?></td>
                <td><?= h($calendariosplano->descricao) ?></td>
                <td><?= $calendariosplano->has('calendariostipo') ? $this->Html->link($calendariosplano->calendariostipo->descricao, ['controller' => 'Calendariostipos', 'action' => 'view', $calendariosplano->calendariostipo->id]) : '' ?></td>
                <td><?= h($calendariosplano->horainicio) ?></td>
                <td><?= h($calendariosplano->horafim) ?></td>
                <td><?= h($calendariosplano->horaalmocoinicio) ?></td>
                <td><?= h($calendariosplano->horaalmocofim) ?></td>
                <td><?= h($calendariosplano->primeiraparadainicio) ?></td>
                <td><?= h($calendariosplano->primeiraparadafim) ?></td>
                <td><?= h($calendariosplano->segundaparadainicio) ?></td>
                <td><?= h($calendariosplano->segundaparadafim) ?></td>
                <td><?= h($calendariosplano->terceiraparadainicio) ?></td>
                <td><?= h($calendariosplano->terceiraparadafim) ?></td>
                <td><?= h($calendariosplano->quartaparadainicio) ?></td>
                <td><?= h($calendariosplano->quartaparadafim) ?></td>
                <td><?= $this->Number->format($calendariosplano->tempoabertura) ?></td>
                <td><?= $this->Number->format($calendariosplano->tempoparadaprogramada) ?></td>
                <td><?= $this->Number->format($calendariosplano->tempodisponivel) ?></td>
                <td><?= h($calendariosplano->considerarcrossday) ?></td>
                <td><?= h($calendariosplano->created) ?></td>
                <td><?= h($calendariosplano->modified) ?></td>
                <td><?= $calendariosplano->has('empresa') ? $this->Html->link($calendariosplano->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $calendariosplano->empresa->id]) : '' ?></td>
                <td><?= h($calendariosplano->tempoprimeiraparada) ?></td>
                <td><?= h($calendariosplano->temposegundaparada) ?></td>
                <td><?= h($calendariosplano->tempoterceiraparada) ?></td>
                <td><?= h($calendariosplano->tempoquartaparada) ?></td>
                <td><?= h($calendariosplano->tempoalmocoparada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $calendariosplano->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendariosplano->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendariosplano->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendariosplano->id)]) ?>
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
