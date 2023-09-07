<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pmobalance $pmobalance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pmobalance'), ['action' => 'edit', $pmobalance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pmobalance'), ['action' => 'delete', $pmobalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pmobalance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pmobalances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pmobalance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pmobalanceconsultores'), ['controller' => 'Pmobalanceconsultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pmobalanceconsultore'), ['controller' => 'Pmobalanceconsultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pmobalances view large-9 medium-8 columns content">
    <h3><?= h($pmobalance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($pmobalance->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $pmobalance->has('statusfuncional') ? $this->Html->link($pmobalance->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $pmobalance->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pmobalance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= $this->Number->format($pmobalance->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($pmobalance->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodoinicio') ?></th>
            <td><?= h($pmobalance->periodoinicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodofim') ?></th>
            <td><?= h($pmobalance->periodofim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pmobalance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pmobalance->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pmobalanceconsultores') ?></h4>
        <?php if (!empty($pmobalance->pmobalanceconsultores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pmobalance Id') ?></th>
                <th scope="col"><?= __('Datafechamento') ?></th>
                <th scope="col"><?= __('Version') ?></th>
                <th scope="col"><?= __('Periodoinicio') ?></th>
                <th scope="col"><?= __('Periodofim') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Tempoabertura') ?></th>
                <th scope="col"><?= __('Tempoliquido') ?></th>
                <th scope="col"><?= __('Absenteismo') ?></th>
                <th scope="col"><?= __('Paradasplanejadas') ?></th>
                <th scope="col"><?= __('Paradasnaoplanejadas') ?></th>
                <th scope="col"><?= __('Intervaloprogramado') ?></th>
                <th scope="col"><?= __('Almoco') ?></th>
                <th scope="col"><?= __('Percentualalocado') ?></th>
                <th scope="col"><?= __('Horaextraprevista') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Processado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pmobalance->pmobalanceconsultores as $pmobalanceconsultores): ?>
            <tr>
                <td><?= h($pmobalanceconsultores->id) ?></td>
                <td><?= h($pmobalanceconsultores->pmobalance_id) ?></td>
                <td><?= h($pmobalanceconsultores->datafechamento) ?></td>
                <td><?= h($pmobalanceconsultores->version) ?></td>
                <td><?= h($pmobalanceconsultores->periodoinicio) ?></td>
                <td><?= h($pmobalanceconsultores->periodofim) ?></td>
                <td><?= h($pmobalanceconsultores->consultore_id) ?></td>
                <td><?= h($pmobalanceconsultores->data) ?></td>
                <td><?= h($pmobalanceconsultores->tempoabertura) ?></td>
                <td><?= h($pmobalanceconsultores->tempoliquido) ?></td>
                <td><?= h($pmobalanceconsultores->absenteismo) ?></td>
                <td><?= h($pmobalanceconsultores->paradasplanejadas) ?></td>
                <td><?= h($pmobalanceconsultores->paradasnaoplanejadas) ?></td>
                <td><?= h($pmobalanceconsultores->intervaloprogramado) ?></td>
                <td><?= h($pmobalanceconsultores->almoco) ?></td>
                <td><?= h($pmobalanceconsultores->percentualalocado) ?></td>
                <td><?= h($pmobalanceconsultores->horaextraprevista) ?></td>
                <td><?= h($pmobalanceconsultores->created) ?></td>
                <td><?= h($pmobalanceconsultores->modified) ?></td>
                <td><?= h($pmobalanceconsultores->processado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pmobalanceconsultores', 'action' => 'view', $pmobalanceconsultores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pmobalanceconsultores', 'action' => 'edit', $pmobalanceconsultores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pmobalanceconsultores', 'action' => 'delete', $pmobalanceconsultores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pmobalanceconsultores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
