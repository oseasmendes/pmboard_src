<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtransaction $sistemascfgtransaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgtransaction'), ['action' => 'edit', $sistemascfgtransaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgtransaction'), ['action' => 'delete', $sistemascfgtransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgtransaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgtransactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgtransaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgtransactions view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgtransaction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgtransaction->has('sistema') ? $this->Html->link($sistemascfgtransaction->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgtransaction->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nometransacao') ?></th>
            <td><?= h($sistemascfgtransaction->nometransacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgtransaction->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Urlreferencia') ?></th>
            <td><?= h($sistemascfgtransaction->urlreferencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modulo') ?></th>
            <td><?= h($sistemascfgtransaction->modulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgtransaction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgtransaction->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgtransaction->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricaotecnica') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgtransaction->descricaotecnica)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemascfgintegrations') ?></h4>
        <?php if (!empty($sistemascfgtransaction->sistemascfgintegrations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Integration Id') ?></th>
                <th scope="col"><?= __('Sistemaorigem Id') ?></th>
                <th scope="col"><?= __('Sistemadestino Id') ?></th>
                <th scope="col"><?= __('Referenciadirecao') ?></th>
                <th scope="col"><?= __('Sistemascfgtransaction Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemascfgtransaction->sistemascfgintegrations as $sistemascfgintegrations): ?>
            <tr>
                <td><?= h($sistemascfgintegrations->id) ?></td>
                <td><?= h($sistemascfgintegrations->tecnologia_id) ?></td>
                <td><?= h($sistemascfgintegrations->referencia) ?></td>
                <td><?= h($sistemascfgintegrations->descricao) ?></td>
                <td><?= h($sistemascfgintegrations->contato) ?></td>
                <td><?= h($sistemascfgintegrations->observacao) ?></td>
                <td><?= h($sistemascfgintegrations->created) ?></td>
                <td><?= h($sistemascfgintegrations->modified) ?></td>
                <td><?= h($sistemascfgintegrations->sistema_id) ?></td>
                <td><?= h($sistemascfgintegrations->integration_id) ?></td>
                <td><?= h($sistemascfgintegrations->sistemaorigem_id) ?></td>
                <td><?= h($sistemascfgintegrations->sistemadestino_id) ?></td>
                <td><?= h($sistemascfgintegrations->referenciadirecao) ?></td>
                <td><?= h($sistemascfgintegrations->sistemascfgtransaction_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgintegrations', 'action' => 'view', $sistemascfgintegrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgintegrations', 'action' => 'edit', $sistemascfgintegrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgintegrations', 'action' => 'delete', $sistemascfgintegrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgintegrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
