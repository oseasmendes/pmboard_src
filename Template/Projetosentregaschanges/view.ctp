<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaschange $projetosentregaschange
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregaschange'), ['action' => 'edit', $projetosentregaschange->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregaschange'), ['action' => 'delete', $projetosentregaschange->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregaschange->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregaschanges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregaschange'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregaschanges view large-9 medium-8 columns content">
    <h3><?= h($projetosentregaschange->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregaschange->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($projetosentregaschange->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $projetosentregaschange->has('motivo') ? $this->Html->link($projetosentregaschange->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregaschange->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregaschange->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosentregasreqsref Id') ?></th>
            <td><?= $this->Number->format($projetosentregaschange->projetosentregasreqsref_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosentregaschange->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregaschange->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregaschange->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivacao') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregaschange->motivacao)); ?>
    </div>
</div>
