<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrisco $sistemasrisco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasrisco'), ['action' => 'edit', $sistemasrisco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasrisco'), ['action' => 'delete', $sistemasrisco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasrisco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicabilidades'), ['controller' => 'Aplicabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicabilidade'), ['controller' => 'Aplicabilidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasriscos view large-9 medium-8 columns content">
    <h3><?= h($sistemasrisco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasrisco->has('sistema') ? $this->Html->link($sistemasrisco->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasrisco->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Risco') ?></th>
            <td><?= $sistemasrisco->has('risco') ? $this->Html->link($sistemasrisco->risco->descricao, ['controller' => 'Riscos', 'action' => 'view', $sistemasrisco->risco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aplicabilidade') ?></th>
            <td><?= $sistemasrisco->has('aplicabilidade') ? $this->Html->link($sistemasrisco->aplicabilidade->descricao, ['controller' => 'Aplicabilidades', 'action' => 'view', $sistemasrisco->aplicabilidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($sistemasrisco->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasrisco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Probabilidade') ?></th>
            <td><?= $this->Number->format($sistemasrisco->probabilidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoprevistoimpacto') ?></th>
            <td><?= $this->Number->format($sistemasrisco->tempoprevistoimpacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pessoasafetadas') ?></th>
            <td><?= $this->Number->format($sistemasrisco->pessoasafetadas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estimativafinanceiradorisco') ?></th>
            <td><?= $this->Number->format($sistemasrisco->estimativafinanceiradorisco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasrisco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasrisco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasrisco->detalhes)); ?>
    </div>
</div>
